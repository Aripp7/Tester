<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\TahunController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function () {
    //dashboard

});



Route::get('/', function () {
    return view('index');
});

Route::resource('dashboard', DashboardController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//guru
Route::resource('guru', GuruController::class);
Route::get('/addGuru', [GuruController::class, 'create']);
Route::get('/editGuru', [GuruController::class, 'edit']);
Route::put('/postGuru', [GuruController::class, 'store']);
Route::put('/postUpdateGuru', [GuruController::class, 'update']);

//Login
Route::get('/adminLogin', [LoginController::class, 'halamanLogin'])->middleware('guest')->name('login');
Route::post('/postLogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);


//siswa
Route::resource('siswa', SiswaController::class);
Route::get('/addSiswa', [SiswaController::class, 'create']);
Route::put('/postSiswa', [SiswaController::class, 'store']);
Route::get('editSiswa', [SiswaController::class, 'edit']);
Route::put('/updateSiswa', [SiswaController::class, 'update']);
// Route::get('/editSiswa/{id}', 'SiswaController@edit')->name('editSiswa');

//tendik
Route::resource('tendik', TendikController::class);;
Route::get('/addTendik', [TendikController::class, 'create']);
Route::put('/postTendik', [TendikController::class, 'store']);
Route::put('/postUpdateTendik', [TendikController::class, 'update']);
Route::get('/editTendik', [TendikController::class, 'edit']);

//tahun ajaran
Route::resource('tahun', TahunController::class);
Route::get('/addtahun', [TahunController::class, 'create']);
Route::put('/postTahun', [TahunController::class, 'store']);
Route::put('/postUpTahun', [TahunController::class, 'update']);
Route::get('/editTahun', [TahunController::class, 'edit']);


//kelas
Route::resource('kelas', KelasController::class);
Route::get('/addKelas', [KelasController::class, 'create']);
Route::put('/postKelas', [KelasController::class, 'store']);
Route::put('/postUpdateKelas', [KelasController::class, 'update']);
Route::get('/editKelas', [KelasController::class, 'edit']);

//user admin
Route::resource('admin', UserController::class);
Route::get('/addAdmin', [UserController::class, 'create']);
Route::put('/postAdmin', [UserController::class, 'store']);
Route::put('/postUpdateAdmin', [UserController::class, 'update']);
Route::get('/editAdmin', [UserController::class, 'edit']);
