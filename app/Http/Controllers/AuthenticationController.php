<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        $user = User::where("email", $request->email)->first();
        if (!empty($user)) {
            if (Hash::check($request->password, $user->password)) {
                return [
                    "status" => Response::HTTP_OK,
                    "message" => "Token Created",
                    "data" => $user->createToken('login')->plainTextToken
                ];
            } else {
                return [
                    "status" => Response::HTTP_FORBIDDEN,
                    "message" => "Invalid Password",
                    "data" => []
                ];
            }
        } else {
            return [
                "status" => Response::HTTP_NOT_FOUND,
                "message" => "User Not Found",
                "data" => []
            ];
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return [
            "status" => Response::HTTP_OK,
            "message" => "Token Deleted",
            "data" => []
        ];
    }
}
