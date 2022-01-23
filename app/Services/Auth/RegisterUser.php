<?php

namespace App\Services\Auth;

use App\Models\User;

class RegisterUser {
    public function __construct($request)
    {
        $user = new User;
        $user->insert([
            'name' => $request['name'],
            'username' => $request['username'],
            'password' => password_hash($request['password'], PASSWORD_DEFAULT),
        ]);
    }
}