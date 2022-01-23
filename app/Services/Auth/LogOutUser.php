<?php

namespace App\Services\Auth;

class LogOutUser {
    public function __construct()
    {
        session()->destroy('user');
    }
}