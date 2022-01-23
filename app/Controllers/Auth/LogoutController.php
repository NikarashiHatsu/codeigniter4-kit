<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Services\Auth\LogOutUser;

class LogoutController extends BaseController
{
    public function logout()
    {
        try {
            new LogOutUser();
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'An error occured: ' . $th->getMessage());
        }

        return redirect()->to('/login')->with('success', 'Logged out successfully.');
    }
}
