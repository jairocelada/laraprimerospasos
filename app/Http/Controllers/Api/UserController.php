<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $resquest) {
        $credentials = [
            'email' => $resquest->email,
            'password' => $resquest->password
        ];

        if (Auth::attempt($credentials)) {
            $token = Auth::user()->createToken('myapptoken')->plainTextToken;

            return response()->json($token);
        }

        return  response()->json("Usuario y/o contraseña inválida");
    }
}
