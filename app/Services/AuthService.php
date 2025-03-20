<?php

namespace App\Services;

use App\Repositories\AuthReposity;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    /**
     * Create a new class instance.
     */
    public function __construct(protected AuthReposity $authRepo){
    }

    public function login($data)
    {
        return $this->authRepo->login($data);
    }

    public function register($data)
    {
        $user = $this->authRepo->create($data);
        return Auth::login($user);
    }
}
