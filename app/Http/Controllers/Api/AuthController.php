<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtpMail;

class AuthController extends Controller
{
    /**
     * User Signup
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Validation error', 422, $validator->errors());
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role_id'  => User::ROLE_USER, // only user can register
            'status'   => User::STATUS_ACTIVE,
        ]);

        $token = auth('api')->login($user);

        return sendSuccessResponse([
            'user' => $user,
            'token' => $token,
        ], 'User registered successfully');
    }

    /**
     * User Login (API only)
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Validation error', 422, $validator->errors());
        }

        $credentials = [
            'email'    => $request->email,
            'password' => $request->password,
            'role_id'  => User::ROLE_USER, // only user login via API
            'status'   => User::STATUS_ACTIVE,
        ];

        if (!$token = auth('api')->attempt($credentials)) {
            return sendErrorResponse('Invalid credentials', 401);
        }

        return sendSuccessResponse([
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in'   => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user(),
        ], 'Login successful');
    }

    /**
     * Get logged in user
     */
    public function me()
    {
        return sendSuccessResponse(auth('api')->user(), 'User profile');
    }

    /**
     * Logout
     */
    public function logout()
    {
        auth('api')->logout();
        return sendSuccessResponse(null, 'Logged out successfully');
    }

    /**
     * Send OTP for Password Reset
     */
    public function sendOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Validation error', 422, $validator->errors());
        }

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return sendErrorResponse('User not found', 404);
        }

        // Check if 24 hours have passed since the first request in the current window
        if ($user->otp_first_request_at && now()->diffInHours($user->otp_first_request_at) >= 24) {
            $user->otp_request_count = 0;
            $user->otp_first_request_at = null;
        }

        // Limit to 5 requests per 24 hours
        if ($user->otp_request_count >= 5) {
            $hoursPassed = now()->diffInHours($user->otp_first_request_at);
            $availableInHours = 24 - $hoursPassed;
            // Ensure we don't say "0 hours"
            $displayHours = $availableInHours > 0 ? $availableInHours : 1;
            
            return sendErrorResponse("You have reached the limit of 5 OTP requests per 24 hours. Please try again in {$displayHours} hours.", 429);
        }

        // Increment or set first request time
        if ($user->otp_request_count == 0 || !$user->otp_first_request_at) {
            $user->otp_first_request_at = now();
        }
        $user->otp_request_count += 1;

        // Generate a 4 digit OTP
        $otp = rand(1000, 9999);
        
        // Save to user with expiration (10 minutes)
        $user->otp = (string)$otp;
        $user->otp_expires_at = now()->addMinutes(10);
        $user->save();

        // Send Email
        try {
            Mail::to($user->email)->send(new OtpMail($otp));
        } catch (\Exception $e) {
            return sendErrorResponse('Failed to send email. Please try again later.', 500, ['error' => $e->getMessage()]);
        }

        return sendSuccessResponse(null, 'OTP has been sent to your email.');
    }

    /**
     * Verify OTP
     */
    public function verifyOtp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|string|size:4'
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Validation error', 422, $validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return sendErrorResponse('User not found', 404);
        }

        if ($user->otp !== $request->otp) {
            return sendErrorResponse('Invalid OTP', 400);
        }

        if (now()->isAfter($user->otp_expires_at)) {
            return sendErrorResponse('OTP has expired', 400);
        }

        return sendSuccessResponse(null, 'OTP verified successfully.');
    }

    /**
     * Reset Password
     */
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'otp' => 'required|string|size:4',
            'password' => 'required|min:6|confirmed'
        ]);

        if ($validator->fails()) {
            return sendErrorResponse('Validation error', 422, $validator->errors());
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return sendErrorResponse('User not found', 404);
        }

        // Verify OTP again just to be safe
        if ($user->otp !== $request->otp || now()->isAfter($user->otp_expires_at)) {
            return sendErrorResponse('Invalid or expired OTP', 400);
        }

        // Reset password
        $user->password = Hash::make($request->password);
        // Clear OTP fields
        $user->otp = null;
        $user->otp_expires_at = null;
        $user->save();

        return sendSuccessResponse(null, 'Password has been reset successfully.');
    }
}
