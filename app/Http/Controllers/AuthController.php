<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\RefreshToken;
use Illuminate\Http\Request;
use App\Models\User;
Use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            abort(401, 'Credenciales no válidas');
        }

        $token = $user->createToken('auth_token')->plainTextToken;
        $refreshToken = $this->createRefreshToken($user);

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'user'=>new UserResource($user)
        ]);
    }

    public function verifyToken(Request $request){

        $user = auth()->user();

        $refreshToken = RefreshToken::where('user_id', $user->id)
            ->first();

        if (!$refreshToken) {
            $this->logout();
            abort(40|1, 'invalid token');
        }

        if($refreshToken->expires_at > now()){
            $refreshToken->expires_at->addMinutes(15);
            return response()->json(['msg'=>'token refreshed', 'refresh_token'=>$refreshToken->refresh_token]);
        };

        return response()->json(['refresh_token' => $refreshToken->refresh_token], 200);

    }

    public function refresh(Request $request)
    {
        $request->validate([
            'refresh_token' => 'required',
        ]);

        $refreshToken = RefreshToken::where('refresh_token', $request->refresh_token)
            ->where('expires_at', '>', now())
            ->first();

        if (!$refreshToken) {
            return response()->json(['message' => 'Invalid refresh token'], 401);
        }

        $user = auth()->user();
        $newRefreshToken = $this->createRefreshToken($user);

        $refreshToken->delete();

        return response()->json([
            'refresh_token' => $newRefreshToken,
            'token_type' => 'Bearer',
        ]);
    }

    private function createRefreshToken(User $user)
    {
        $refreshToken = Str::random(64);
        $expiresAt = now()->addMinutes(1);

        RefreshToken::create([
            'user_id' => $user->id,
            'refresh_token' => $refreshToken,
            'expires_at' => $expiresAt,
        ]);

        return $refreshToken;
    }

    public function logout(){
        $user = auth()->user();
        $user->tokens()->delete();
        $user->refresh_tokens()->delete();
        return response()->json(['message' => 'Logged out successfully'], 200);
    }

    public function getLoggedInUser(){
        $user = auth()->user();
        return new UserResource($user);
    }
}
