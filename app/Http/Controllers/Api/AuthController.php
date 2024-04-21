<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // $request->validate([
        //     'email' => 'required|email',
        //     'password' => 'required|min:8',
        // ]);

        // return response()->json([
        //   'message' => 'Success!',
        // ], 200);

        if ($a = !auth()->attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => [
                  'email' => ['The provided credentials ares incorrect.'],
                ],
            ], 422);
        }

        $user = $request->user();
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'user' => $user,
            'token' => $token,
        ], 200);
    }
}
