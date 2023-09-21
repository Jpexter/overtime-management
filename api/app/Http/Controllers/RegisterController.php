<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    
    public function index(){
        
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => ['required', 'min:5', 'max:255', 'unique:tb_users'],
            'email' => 'required|email',
            'password' => 'required|min:6|max:50',
            'confirm_password' => 'required|same:password',
            'phone_number' => 'required',
            'id_role' => 'required|integer',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Registration Successful');
    }
}
