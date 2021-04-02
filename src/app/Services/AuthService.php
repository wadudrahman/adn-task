<?php

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AuthService
{
    public function registerUser(array $data) : bool
    {
        try {
            User::create($data);

            return true;
        } catch (\Exception $exception) {
            return false;
        }
    }

    public function loginUser(string $email, string $password) : bool
    {
        try {

            return Auth::guard('web')->attempt(['email' => $email, 'password' => $password]);
        } catch (\Exception $exception) {
            return false;
        }
    }

}
