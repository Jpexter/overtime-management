<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function authenticate(Request $request)
    {
        $request-> validate([
            'username' => 'required|email',
            'password' => 'required',
        ]);
    }
}
