<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\EmailOtp;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
            
            $finduser = User::where('google_id', $user->id)->first();
            
            if($finduser){
                Auth::login($finduser);
                return redirect()->intended('/');
            }

            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id'=> $user->id,
                'password' => encrypt('123456dummy')
            ]);

            Auth::login($newUser);
            return redirect()->intended('/');

        } catch (Exception $e) {
            return redirect()->route('home')->with('error', 'Google authentication failed');
        }
    }

    public function sendOTP(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email']);
            
            // Generate OTP
            $otp = str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
            
            // Save OTP to database
            $emailOtp = EmailOtp::updateOrCreate(
                ['email' => $request->email],
                [
                    'otp' => $otp,
                    'expire_at' => now()->addMinutes(5)
                ]
            );

            // Setup PHPMailer
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'wanderinjogja@gmail.com';
            $mail->Password = 'agpm hboa omua plbq';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            $mail->setFrom('wanderinjogja@gmail.com', 'Visit Nusa');
            $mail->addAddress($request->email);
            $mail->isHTML(true);
            $mail->Subject = 'Your Visit Nusa Verification Code';
            
            // Email template
            $mail->Body = view('emails.otp', ['otp' => $otp])->render();

            $mail->send();

            return response()->json([
                'success' => true,
                'message' => 'OTP sent successfully'
            ]);

        } catch (Exception $e) {
            \Log::error('OTP Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Failed to send OTP: ' . $e->getMessage()
            ], 500);
        }
    }

    public function verifyOTP(Request $request) 
    {
        try {
            $request->validate([
                'email' => 'required|email',
                'otp' => 'required|string|size:6'
            ]);

            $emailOtp = EmailOtp::where('email', $request->email)
                ->where('otp', $request->otp)
                ->where('expire_at', '>', now())
                ->first();

            if(!$emailOtp) {
                return response()->json([
                    'success' => false,
                    'message' => 'Invalid or expired OTP'
                ], 400);
            }

            // Create/Login user
            $user = User::firstOrCreate(
                ['email' => $request->email],
                [
                    'name' => explode('@', $request->email)[0],
                    'password' => bcrypt(Str::random(16))
                ]
            );

            Auth::login($user);
            $emailOtp->delete();

            return response()->json([
                'success' => true,
                'message' => 'Verified successfully',
                'redirect' => route('landing')
            ]);

        } catch (Exception $e) {
            \Log::error('OTP Verification Error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Verification failed: ' . $e->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('landing')->with('success', 'Berhasil logout');
    }
}
