<?php

namespace App\Http\Controllers\master;

use Illuminate\Http\Request;
use App\Models\MasterProjectModel;
use App\Http\Controllers\Controller;

class MasterProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baseUrl = config('app.url');
        return view('master_project.master_project', [
            'projects' => MasterProjectModel::all(),
            'baseUrl' => $baseUrl
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $baseUrl = config('app.url');
        return view('master_project.create');
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
        'project_name' => 'required|max:40|string',
        'status' => 'required|in:normal,holiday',
        'is_on_duty' => 'in:Y,N',
    ]);

    // Periksa apakah checkbox "Is On Duty" dicentang
    $isOnDuty = $request->has('is_on_duty') ? 'Y' : 'N';

    // Tambahkan is_on_duty ke dalam data yang akan disimpan ke database
    $validatedData['is_on_duty'] = $isOnDuty;

    // Cek kondisi
    if ($validatedData['status'] == 'normal' && $isOnDuty == 'N') {
        return redirect()->back()->withInput()->with('error', 'If "Normal" is selected, "Is On Duty" must be "N".');
    } elseif ($validatedData['status'] == 'holiday' && $isOnDuty == 'N') {
        return redirect()->back()->withInput()->with('error', 'If "Holiday" is selected, "Is On Duty" must be "N".');
    }

    MasterProjectModel::create($validatedData);
    // dd($validatedData);

    return redirect()->route('masterproject.index')->with('success', 'New Project has been added!');
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
        $project = MasterProjectModel::find($id);

        return view('master_project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_project)
{
    // Validasi data yang dikirim dari formulir
    $validatedData = $request->validate([
        'project_name' => 'required|max:40|string',
        'status' => 'required|in:normal,holiday',
        'is_on_duty' => 'in:Y,N',
    ]);

    // Periksa apakah checkbox "Is On Duty" dicentang
    $isOnDuty = $request->has('is_on_duty') ? 'Y' : 'N';

    // Tambahkan is_on_duty ke dalam data yang akan diupdate ke database
    $validatedData['is_on_duty'] = $isOnDuty;

    // Cek kondisi
    if ($validatedData['status'] == 'normal' && $isOnDuty == 'N') {
        return redirect()->back()->withInput()->with('error', 'If "Normal" is selected, "Is On Duty" must be "N".');
    } elseif ($validatedData['status'] == 'holiday' && $isOnDuty == 'N') {
        return redirect()->back()->withInput()->with('error', 'If "Holiday" is selected, "Is On Duty" must be "N".');
    }

    // Temukan proyek yang akan diupdate
    $project = MasterProjectModel::findOrFail($id_project);

    if (!$project) {
        return redirect()->route('masterproject.index')->with('error', 'Project not found');
    }

    // Lakukan pembaruan data
    $project->update($validatedData);

    return redirect()->route('masterproject.index')->with('success', 'Project has been updated!');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_project)
    {
        // Temukan data berdasarkan ID
    $project = MasterProjectModel::find($id_project);

    // Periksa apakah data ditemukan
    if (!$project) {
        return redirect()->route('masterproject.index')->with('error', 'Project not found');
    }

    // Hapus data dari database
    MasterProjectModel::destroy($id_project);

    return redirect()->route('masterproject.index')->with('success', 'Project has been deleted');

    }
}
