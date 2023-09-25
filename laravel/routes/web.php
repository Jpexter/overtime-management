<?php

use App\Http\Controllers\dataOvertime\DataOvertimeAdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\master\MasterProjectController;
use App\Http\Controllers\master\MasterDivisionController;
use App\Http\Controllers\master\MasterBasicSalaryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.main');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/addUser', [UserListController::class, 'insert']);
// Route::post('/addUser', [UserListController::class, 'store']);

// Route::get('/userlist', [UserListController::class, 'index']);

// Route::get('/edituser/{id_users}', [UserListController::class, 'edit']);
// Route::post('/updateuser/{id_users}', [UserListController::class, 'update']);

Route::resource('/userlist', UserListController::class);

// Route::get('/delete/{id}', [UserListController::class, 'delete'])->name('delete');

Route::resource('/masterdivision', MasterDivisionController::class);

Route::resource('/masterproject', MasterProjectController::class);

Route::resource('/masterbasicsalary', MasterBasicSalaryController::class);


Route::controller(DataOvertimeAdminController::class)->group(function(){
    Route::get('/dataovertimeadmin', 'index');
    Route::get('/dataovertimeadmin/{id_record}', 'show')->name('data_overtime_admin.show');
    // Route::get('/userlist-edit/{id_users}', 'edit');
    // Route::post('/userlist', 'create');
    Route::put('/dataovertimeadmin/{id_record}', 'update')->name('data_overtime_admin.update');
    // Route::delete('/userlist/{id_users}', 'delete');
});
