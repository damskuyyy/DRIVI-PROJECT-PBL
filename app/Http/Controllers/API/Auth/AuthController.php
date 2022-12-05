<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        # validate
        $validateData = $request->validate([
            'name' => 'required | max:25',
            'email' => 'email | required | unique:users',
            'password' => 'required | confirmed',
        ]);

        // cretae user
        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $user->save;

        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        # code...
        $validateData = $request->validate([
            'email' => 'email | required | unique:users',
            'password' => 'required | confirmed',
        ]);

        // 
        $login_detail = request(['email','password']);

        if(!Auth::attempt($login_detail)){
            return response()->json([
                'error' => 'login gagal'
            ], 401);
        }

        $user = $request->user();

        $tokenResault = $user->createToken('AccessToken');
        $token = $tokenResault->token;
        $token->save();

        return response()->json([
            'access_token' => $tokenResault->accessToken,
            'token_id' => $token->id,
            'user_id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ],200);
    }
}
