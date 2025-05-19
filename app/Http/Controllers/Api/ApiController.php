<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    //Register Api-->name, email, password, password_confirmation
    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|string",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
        ]);

        User::create($request->all());

        return response()->json([
            "status" => true,
            "message" => "User registered successfully"
        ]);
    }

    //Login Api
    public function login() {}

    //Profile Api
    public function profile() {}

    //Logout Api
    public function logout() {}
}
