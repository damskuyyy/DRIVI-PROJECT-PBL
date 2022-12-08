<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Passport\Passport;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:25',
            'email' => 'email | required | unique:users',
            'password' => 'required | confirmed'
        ]);

        // create user
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        $user->save();

        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'email | required',
            'password' => 'required'
        ]);

        $login_detail = request(['email', 'password']);

        if (!Auth::attempt($login_detail)) {
            return response()->json([
                'error' => 'login gagal. Cek lagi detail login'
            ], 401);
        }

        $user = $request->user();
        // $token = $request->user()->createToken($request->token_name);

        $tokenResult = $user->createToken('AccessToken');
        $token = $tokenResult->token;
        $token->save();

        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_id' => $token->id,
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ], 200);
    }
}
