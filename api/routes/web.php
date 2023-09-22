<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\master\MasterDivisionController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/addUser', [UserListController::class, 'insert']);
Route::post('/addUser', [UserListController::class, 'store']);

Route::get('/userlist', [UserListController::class, 'index'])->middleware('auth');

Route::get('/edituser/{id_users}', [UserListController::class, 'edit']);
Route::post('/updateuser/{id_users}', [UserListController::class, 'update']);

Route::get('/delete/{id}', [UserListController::class, 'delete'])->name('delete');

Route::resource('/masterdivision', MasterDivisionController::class);


