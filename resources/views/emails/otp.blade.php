<!DOCTYPE html>
<html>
<head>
    <title>Spenny - Password Reset OTP</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #F8F9FA; padding: 20px;">
    <div style="max-width: 600px; margin: 0 auto; background: #FFFFFF; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
        <h2 style="color: #013b8f; text-align: center; font-family: 'Montserrat', sans-serif;">Spenny</h2>
        <p style="font-size: 16px; color: #333333;">Hello,</p>
        <p style="font-size: 16px; color: #333333;">You have requested to reset your password. Use the following OTP to complete the process. This OTP is valid for 10 minutes.</p>
        
        <div style="background-color: #F0F4FA; padding: 20px; text-align: center; border-radius: 8px; margin: 30px 0;">
            <p style="font-size: 14px; color: #013b8f; font-weight: bold; margin-bottom: 10px; letter-spacing: 1px;">YOUR OTP CODE</p>
            <h1 style="font-size: 36px; color: #013b8f; margin: 0; letter-spacing: 5px;">{{ $otp }}</h1>
        </div>
        
        <p style="font-size: 14px; color: #777777;">If you did not request a password reset, you can safely ignore this email.</p>
        
        <hr style="border: none; border-top: 1px solid #EFEFEF; margin: 30px 0;">
        <p style="font-size: 12px; color: #A0A0A0; text-align: center;">The Spenny Team</p>
    </div>
</body>
</html>
