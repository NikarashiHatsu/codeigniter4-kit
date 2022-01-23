<?php

namespace App\Services\Auth;

use App\Models\User;
use CodeIgniter\HTTP\IncomingRequest;

class LogInUser {
    public function __construct(IncomingRequest $request, $username = 'username')
    {
        $user = new User();
        $user = $user->where($username, $request->getPost($username));

        if ($user->countAll() == 0) {
            throw new \Exception('User not found.');
        }

        $user = $user->asObject()->first();
        unset($user->password);

        session()->set('user', $user);
    }
}