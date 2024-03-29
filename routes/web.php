<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\TahunController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
});
//Login
Route::get('/adminLogin', [LoginController::class, 'halamanLogin'])->middleware('guest')->name('login');
// Route::post('postLogin', [LoginController::class, 'postLogin']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('postLogin', 'App\Http\Controllers\LoginController@postLogin')->name('login-admin');


Route::group(['middleware' => 'auth'], function () {


    Route::resource('dashboard', DashboardController::class);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('home', HomeController::class);
    Route::get('/hone', [HomeController::class, 'index'])->name('home');

    //guru
    Route::resource('guru', GuruController::class);
    Route::get('/addGuru', [GuruController::class, 'create']);
    Route::get('/editGuru', [GuruController::class, 'edit']);
    Route::put('/postGuru', [GuruController::class, 'store']);
    Route::put('guruUpdate/{id_guru}', 'App\Http\Controllers\GuruController@update');
    Route::get('/exportPDFGuru', [GuruController::class, 'exportPDFGuru']);
    Route::get('/exportExcelGuru', [GuruController::class, 'exportExcelGuru']);




    //siswa
    Route::resource('siswa', SiswaController::class);
    Route::get('/addSiswa', [SiswaController::class, 'create']);
    Route::put('/postSiswa', [SiswaController::class, 'store']);
    Route::get('editSiswa', [SiswaController::class, 'edit']);
    // Route::put('siswaUpdate', [SiswaController::class, 'update'])->name('siswaUpdate');
    Route::put('siswaUpdate/{id_siswa}', 'App\Http\Controllers\SiswaController@update');
    Route::get('/exportExcelSiswa', [SiswaController::class, 'exportExcelSiswa']);
    Route::get('/exportSiswa', [SiswaController::class, 'exportSiswa']);

    //tendik
    Route::resource('tendik', TendikController::class);;
    Route::get('/addTendik', [TendikController::class, 'create']);
    Route::put('/postTendik', [TendikController::class, 'store']);
    Route::put('tendikUpdate/{id_tendik}', 'App\Http\Controllers\TendikController@update');
    Route::get('/editTendik', [TendikController::class, 'edit']);
    Route::get('/exportTendik', [TendikController::class, 'exportTendik']);
    Route::get('/exportExcel', [TendikController::class, 'exportExcel']);

    //tahun ajaran
    Route::resource('tahun', TahunController::class);
    Route::get('/addtahun', [TahunController::class, 'create']);
    Route::put('/postTahun', [TahunController::class, 'store']);
    Route::put('tahunUpdate/{id_tahun}', 'App\Http\Controllers\TahunController@update');
    Route::get('/editTahun', [TahunController::class, 'edit']);

    //kelas
    Route::resource('kelas', KelasController::class);
    Route::get('/addKelas', [KelasController::class, 'create']);
    Route::put('/postKelas', [KelasController::class, 'store']);
    Route::put('kelasUpdate/{id_kelas}', 'App\Http\Controllers\KelasController@update');
    Route::get('/editKelas', [KelasController::class, 'edit']);


    //user admin
    Route::resource('user', UserController::class);
    Route::get('/addUser', [UserController::class, 'create']);
    Route::put('/postUser', [UserController::class, 'store']);
    Route::put('userUpdate/{id_user}', 'App\Http\Controllers\UserController@update');
    Route::get('/edituser', [UserController::class, 'edit']);
    Route::get('/show/{$id}', [UserController::class, 'edit']);

    //mapel
    Route::resource('mapel', MapelController::class);
    Route::get('/addMapel', [MapelController::class, 'create']);
    Route::put('/postMapel', [MapelController::class, 'store']);
    Route::put('mapelUpdate/{id_mapel}', 'App\Http\Controllers\MapelController@update');
    Route::get('/editMapel', [MapelController::class, 'edit']);

    //surat
    Route::resource('surat', SuratController::class);
    Route::get('/surat', [SuratController::class, 'index']);
    Route::get('/addSurat', [SuratController::class, 'create']);
    Route::put('/postSurat', [SuratController::class, 'store']);
    Route::put('suratUpdate/{id_surat}', 'App\Http\Controllers\SuratController@update');
    Route::get('/editSurat', [SuratController::class, 'edit']);

    //jadwal
    Route::resource('jadwal', JadwalController::class);
    Route::get('/jadwal', [JadwalController::class, 'index']);
    Route::get('/addJadwal', [JadwalController::class, 'create']);
    Route::put('/postJadwal', [JadwalController::class, 'store']);
    Route::put('updateJadwal/{id_jadwal}', 'App\Http\Controllers\JadwalController@update');
    Route::get('/editJadwal', [JadwalController::class, 'edit']);
});
