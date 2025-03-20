<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthReposity
{
    public function login($data)
    {
        return Auth::attempt($data);
    }

    public function create($data)
    {
        return User::create($data);
    }
}
