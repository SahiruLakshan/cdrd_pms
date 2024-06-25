<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected function authenticated(Request $request, $user)
    {
        // Check the user type
        if ($user->usertype == '1') {
            return redirect('/dashboard');
        } else {
            return redirect('/');
        }
    }
}
