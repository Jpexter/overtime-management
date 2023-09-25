<?php

namespace App\Http\Controllers\master;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MasterBasicSalaryModel;

class MasterBasicSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master_basic_salary.master_basic_salary', [
            'basicSalaries' => MasterBasicSalaryModel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Tampilkan halaman tambah gaji dasar
        $users = User::all();
        return view('master_basic_salary.create', compact('users'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'id_users' => 'required|numeric',
            'basicsalary' => 'required|numeric',
        ]);
        
    
        // Mengubah format basicsalary sebelum menyimpan
        $basicsalary = str_replace('.', '', $request->basicsalary); // Menghapus titik pemisah ribuan
        $validatedData['total_basic_salary'] = $basicsalary;
    
        // Set total_basic_salary sama dengan basicsalary
        $validatedData['total_basic_salary'] = $basicsalary;
    
        MasterBasicSalaryModel::create($validatedData);
    
        // Redirect atau tampilkan pesan sukses
        return redirect()->route('masterbasicsalary.index')->with('success', 'Basic Salary added successfully.');
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
    public function edit($id_basic_salary)
    {
        $basicSalary = MasterBasicSalaryModel::find($id_basic_salary);

        if (!$basicSalary) {
            abort(404); // Jika tidak ditemukan, tampilkan halaman 404
        }

        return view('master_basic_salary.edit', compact('basicSalary'));
    }   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_basic_salary)
    {
        // Validasi data dari formulir
        $validatedData = $request->validate([
            'basicsalary' => 'required|numeric',
        ]);
        
        // Mengambil data Basic Salary berdasarkan ID
        $basicSalary = MasterBasicSalaryModel::find($id_basic_salary);
        
        // Periksa apakah data ditemukan
        if (!$basicSalary) {
            return redirect()->route('masterbasicsalary.index')->with('error', 'Basic Salary not found.');
        }
        
        // Memperbarui data Basic Salary
        $basicSalary->update([
            'total_basic_salary' => $validatedData['basicsalary'],
        ]);

        return redirect()->route('masterbasicsalary.index')->with('success', 'Basic Salary updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_basic_salary)
    {
        // Cari data master basic salary berdasarkan ID
        $basicSalary = MasterBasicSalaryModel::findOrFail($id_basic_salary);

        // Hapus data
        $basicSalary->delete();

        return redirect()->route('masterbasicsalary.index')->with('success', 'Basic Salary deleted successfully.');
    }
}
