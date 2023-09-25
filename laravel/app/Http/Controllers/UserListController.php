<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        $baseUrl = config('app.url');
        return view('userlist.index', compact('data', 'baseUrl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->route('userlist')->with('success', 'Registration Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_users)
    {
        $data = User::find($id_users);
        $baseUrl = config('app.url');
        return view('userlist.edit', compact('data','baseUrl'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_users)
{
    $data = User::find($id_users);
    $data->name = $request->input('name');
    $data->username = $request->input('username');
    $data->email = $request->input('email');
    $data->phone_number = $request->input('phone_number');
    $data->id_role = $request->input('id_role');

    // Check if a new password is provided
    if ($request->has('password')) {
        $data->password = bcrypt($request->input('password'));
    }

    $data->save();

    return redirect()->route('userlist.index')->with('success', 'Update Successful');
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_users)
{
    $data = User::find($id_users);
    if (!$data) {
        return redirect()->back()->with('error', 'User not found');
    }
    
    $data->delete();
    
    return redirect()->route('userlist.index')->with('success', 'Delete Successful');
}
}
