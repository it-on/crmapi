<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;

class UsersController extends Controller
{
    public function login(Request $request){
        $userData = $request->only('email', 'password');
        if(!$token = JWTAuth::attempt($userData)){
            return response()->json([
                'error' => 'invalid login or password'
            ], 401);
        }

        return response()->json([
            'token' => $token
        ], 200);
    }
}
