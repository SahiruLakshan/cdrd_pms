<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Illuminate\Support\Facades\Auth;

class LoginResponse implements LoginResponseContract
{
    public function toResponse($request)
    {
        $user = Auth::user();
        
        if ($user->usertype == '1') {
            return redirect()->intended('/dashboard');
        } else {
            return redirect()->intended('/');
        }
    }
}
