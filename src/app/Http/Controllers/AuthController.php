<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
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

        if ((new AuthService())->registerUser($data)) {
            session()->flash('success_message', __('Registration Successful. Please Login !'));
            $redirectTo = '/login';
        } else {
            session()->flash('warning_message', __('Registration Failed, Please Try Again.'));
            $redirectTo = '/registration';
        }

        return redirect()->to($redirectTo);
    }

    public function showLoginView()
    {
        return view('login');
    }

    private function checkIfInputIsEmail($input)
    {
        //Find '@' and '.' in Given Input
        $findAtSign = strpos($input, '@');
        $findDot = strpos($input, '.');

        //Return True for Email, otherwise False
        return ($findAtSign !== false && $findDot !== false && $findDot > $findAtSign);
    }

    public function login(Request $request)
    {
        $request->validate(
            [
                'loginToken' => 'required|string',
                'password' => 'required|string'
            ]
        );

        if ($this->checkIfInputIsEmail(trim($request->loginToken))) {
            $loginTokenColumn = 'email';
        } elseif (is_numeric(trim($request->loginToken))) {
            $loginTokenColumn = 'msisdn';
        } else {
            $loginTokenColumn = 'username';
        }

        if ((new AuthService())->loginUser($loginTokenColumn, trim($request->loginToken), trim($request->password))) {
            session()->flash('success_message', __('Login Successful !'));
            $redirectTo = '/dashboard';
        } else {
            session()->flash('warning_message', __('Invalid Credentials.'));
            $redirectTo = '/login';
        }

        return redirect()->to($redirectTo);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login.get');
    }
}
