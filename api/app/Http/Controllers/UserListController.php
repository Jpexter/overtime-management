<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserListController extends Controller
{
    public function index(){
        $data = User::all();
        return view('userlist.index', compact('data'));
    }

    public function insert(){
        return view('userlist.adduser');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => ['required', 'min:5', 'max:255', 'unique:tb_users'],
            'email' => 'required|email',
            'password' => 'required|min:6|max:50',
            'phone_number' => 'required',
            'id_role' => 'required|integer',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->route('login')->with('success', 'Registration Successful');
    }

    public function edit($id_users){    
        $data = User::find($id_users);
        // dd($data);
        return view('userlist.updateuser', compact('data'));
    }

    public function update(Request $request, $id_users){
        $data = User::find($id_users);
        $data->update($request->all());
        return redirect()->route('login')->with('success', 'Update Successful');
    }

    public function delete($id_users){
        $data = User::find($id_users);
        $data->delete();
        return redirect()->route('login')->with('success', 'Delete Successful');
    }

    
    
}
