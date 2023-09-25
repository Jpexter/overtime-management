<?php

namespace App\Http\Controllers\dataOvertime;

use App\Http\Controllers\Controller;
use App\Models\OvertimeRecordModel;
use Illuminate\Http\Request;

class DataOvertimeAdminController extends Controller
{
    public function index()
    {
        $baseUrl = config('app.url');
    
        // Mengambil semua data catatan lembur beserta relasi tb_users, tb_master_division, dan tb_master_project
        $overtimeRecords = OvertimeRecordModel::with('tb_users', 'tb_master_division', 'tb_master_project')->get();

        // Tampilkan data dalam dd() untuk melihat datanya
        // dd($overtimeRecords);

        return view('data_overtime_admin.index', [
            'overtimeRecords' => $overtimeRecords,
        ]);
    }

    public function show($id_project)
    {
        $baseUrl = config('app.url');
        // Mengambil data catatan lembur berdasarkan ID
        $overtimeRecord = OvertimeRecordModel::with('tb_users', 'tb_master_division', 'tb_master_project')->find($id_project);

        // Cek apakah data berhasil diambil
        // dd($overtimeRecord);

        if (!$overtimeRecord) {
            // Tambahkan logika penanganan jika catatan lembur tidak ditemukan
            return abort(404); // Contoh: Tampilkan halaman 404
        }

        return view('data_overtime_admin.show', [
            'overtimeRecord' => $overtimeRecord,
            'baseUrl' => $baseUrl,
        ]);
    }

    public function update(Request $request, $id)
    {
        // Validasi data dari request jika diperlukan
        $request->validate([
            'action' => 'required|in:submit,reject',
        ]);

        // Temukan data Overtime berdasarkan ID
        $dataOvertime = OvertimeRecordModel::find($id);

        if (!$dataOvertime) {
            return redirect()->back()->with('error', 'Data Overtime tidak ditemukan.');
        }

        // Perbarui nilai submitted_by_admin, send_by_admin, dan rejected_at berdasarkan tindakan
        if ($request->action === 'submit') {
            $dataOvertime->submitted_by_admin = now(); // Isi dengan tanggal saat ini
            $dataOvertime->send_by_admin = 'Y';
            // $dataOvertime->rejected_at = null; // Kosongkan nilai rejected_at
        } elseif ($request->action === 'reject') {
            $dataOvertime->submitted_by_admin = now(); // Isi dengan tanggal saat ini
            $dataOvertime->send_by_admin = 'N';
            // $dataOvertime->rejected_at = now(); // Isi dengan tanggal saat ini
        }

        $dataOvertime->save();

        return redirect()->back()->with('success', 'Data Overtime berhasil diperbarui.');
    }



    
    // public function submit(Request $request, $id_record)
    // {
    //     // Temukan data Overtime berdasarkan ID
    //     $dataOvertime = OvertimeRecordModel::find($id_record);

    //     if (!$dataOvertime) {
    //         return redirect()->back()->with('error', 'Data Overtime tidak ditemukan.');
    //     }

    //     // Perbarui nilai submitted_by_admin menjadi 'Y' dan simpan tanggal
    //     $dataOvertime->submitted_by_admin = 'Y';
    //     $dataOvertime->submitted_at = now(); // Menyimpan tanggal saat ini
    //     $dataOvertime->save();

    //     return redirect()->back()->with('success', 'Data Overtime berhasil disubmit.');
    // }

    // public function reject(Request $request, $id_record)
    // {
    //     // Temukan data Overtime berdasarkan ID
    //     $dataOvertime = OvertimeRecordModel::find($id_record);

    //     if (!$dataOvertime) {
    //         return redirect()->back()->with('error', 'Data Overtime tidak ditemukan.');
    //     }

    //     // Perbarui nilai submitted_by_admin menjadi 'N' dan simpan tanggal
    //     $dataOvertime->submitted_by_admin = 'N';
    //     $dataOvertime->submitted_at = now(); // Menyimpan tanggal saat ini
    //     $dataOvertime->save();

    //     return redirect()->back()->with('success', 'Data Overtime berhasil direject.');
    // }




}
