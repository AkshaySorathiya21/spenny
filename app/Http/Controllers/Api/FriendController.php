<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Friend;
use Illuminate\Support\Facades\Validator;

class FriendController extends Controller
{
    public function addFriend(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'identifier' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = auth()->user();
        $identifier = $request->identifier;

        // Strip @ from handle if provided
        $identifier = ltrim($identifier, '@');

        // Allow searching by email or name
        $friend = User::where('email', $identifier)
                      ->orWhere('name', $identifier)
                      ->first();

        if (!$friend) {
            return response()->json([
                'success' => false,
                'message' => 'User not found with the provided handle or email.',
            ], 404);
        }

        if ($friend->id === $user->id) {
            return response()->json([
                'success' => false,
                'message' => 'You cannot add yourself as a friend.',
            ], 400);
        }

        // Check if friendship already exists
        $existingFriendship = Friend::where('user_id', $user->id)
                                    ->where('friend_id', $friend->id)
                                    ->first();

        if ($existingFriendship) {
            return response()->json([
                'success' => false,
                'message' => 'Friend request already sent or you are already friends.',
            ], 400);
        }

        // Create friend connection
        Friend::create([
            'user_id' => $user->id,
            'friend_id' => $friend->id,
            'status' => 'pending'
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Friend request sent successfully!',
            'data' => [
                'friend' => [
                    'id' => $friend->id,
                    'name' => $friend->name,
                    'email' => $friend->email,
                    'profile_image' => $friend->profile_image
                ]
            ]
        ], 200);
    }
}
