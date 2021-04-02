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

    public function loginUser(string $loginTokenColumn, string $loginToken, string $password) : bool
    {
        try {
            return Auth::guard('web')->attempt([$loginTokenColumn => $loginToken, 'password' => $password]);
        } catch (\Exception $exception) {
            return false;
        }
    }

}
