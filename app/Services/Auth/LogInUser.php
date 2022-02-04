<?php

namespace App\Services\Auth;

use App\Models\User;
use CodeIgniter\HTTP\IncomingRequest;

class LogInUser {
    public function __construct(IncomingRequest $request, $username = 'username')
    {
        $user = new User();
        $user = $user->where($username, $request->getPost($username));

        if ($user->countAllResults() == 0) {
            throw new \Exception('User not found.');
        }

        if (!password_verify($request->getPost('password'), $user->where($username, $request->getPost($username))->first()->password)) {
            throw new \Exception("Password is incorrect");
        }

        $user = $user->where($username, $request->getPost($username))->first();
        unset($user->password);

        session()->set('user', $user);
    }
}