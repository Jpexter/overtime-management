<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Models\MasterDivisionModel;
use App\Http\Controllers\Controller;

class MasterDivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('master_division.master_division', [
            'divisions' => MasterDivisionModel::all() 
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master_division.create');
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
            'name_division' => 'required|max:40|string',
            'status_division' => 'required|in:Y,N'
        ]);
    
        MasterDivisionModel::create($validatedData);
    
        return redirect()->route('masterdivision.index')->with('success', 'New Division has been added!');
    
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
    public function edit($id)
    {
        
        $division = MasterDivisionModel::find($id);
        return view('master_division.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_division)
    {
        $validatedData = $request->validate([
            'name_division' => 'required|max:40|string',
            'status_division' => 'required|in:Y,N'
        ]);
    
        // Cari division berdasarkan ID dan update data
        $division = MasterDivisionModel::findOrFail($id_division);
        $division->update($validatedData);
    
        // Redirect kembali ke halaman daftar division atau halaman detail division
        return redirect()->route('masterdivision.index')->with('success', 'Division berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_division)
    {
        MasterDivisionModel::destroy($id_division);

        return redirect('/masterdivision')->with('success', 'New Division has been added!');
    }
}
