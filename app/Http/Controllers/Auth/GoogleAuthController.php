<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
        public function redirectToGoogle(Request $request)
    {
        return Socialite::driver("google")->redirect();
    }

    public function handleGoogleCallback(Request $request) {
        try {

            $googleUser = Socialite::driver("google")->user();

            if (!$googleUser) {
                return response()->json(['error' => 'Invalid Google token'], 401);
            }

            // Check if the user exists or create a new one
            $user = User::updateOrCreate(
                ['email' => $googleUser->email],
                [
                    'name' => $googleUser->name,
                    'provider' => 'Google',
                    'provider_id' => $googleUser->id,
                    'avatar' => $googleUser->avater,
                    'password' => bcrypt(Str::random(16)), // Not used, but required
                    'email_verified_at' => now()
                ]
            );

            // Generate API token for the user
            $token = $user->createToken('API_Token')->plainTextToken;

            return redirect(env("GOOGLE_FRONTEND_REDIRECT") . $token);

        } catch (\Throwable $th) {
            // Handle unexpected errors
            return response()->json([
                'error' => 'An unexpected error occurred',
                'message' => $th->getMessage(),
            ], 500);
        }
    }
}
