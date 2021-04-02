<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginView()
    {
        return view('login');
    }

    public function showRegistrationView()
    {
        return view('registration');
    }

    public function registration(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string',
                'email' => 'nullable|email|unique:users,email',
                'username' => 'required|string|unique:users,username',
                'msisdn' => 'nullable|string|unique:users,msisdn',
                'password' => 'required|min:6'
            ]
        );

        $data = [
            'name' => trim($request->name),
            'email' => trim($request->email),
            'username' => trim($request->username),
            'msisdn' => trim($request->msisdn),
            'password' => Hash::make(trim($request->password)),
            'role' => 'user'
        ];
dd('here');
        $registered = (new AuthService())->registerUser($data);



        return ($registered) ? redirect()->to('/login') : redirect()->to('/register');
    }
}
