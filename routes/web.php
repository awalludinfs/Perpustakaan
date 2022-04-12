<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DatabukuadminController;
use App\Http\Controllers\DatabukuController;
use App\Http\Controllers\DatamemberController;
use App\Http\Controllers\DatamemberadminController;
use App\Http\Controllers\DatapembayaranController;
use App\Http\Controllers\DatapeminjamanadminController;
use App\Http\Controllers\DatapeminjamanController;
use App\Http\Controllers\DatapetugasadminController;
use App\Http\Controllers\DatauseradminController;
use App\Http\Controllers\kembaliController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PinjamController;
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

//admin

//data buku
Route::get('/databukuadmin',[DatabukuadminController::class, 'index']);
Route::get('/tambahdatabuku',[DatabukuadminController::class,'create']);
Route::post('tdatabuku',[DatabukuadminController::class, 'store'])->name('tdatabuku');//blm

//data member
Route::get('/datamemberadmin',[DatamemberadminController::class, 'index']);
Route::get('/tambahdata',[DatamemberadminController::class, 'create']);
Route::post('tdata',[DatamemberadminController::class, 'store'])->name('tdata');
Route::resource('datamemberadmin',DatamemberadminController::class);//blm

//data user
Route::get('/datauseradmin',[DatauseradminController::class, 'index']);
Route::get('/tambahdatauser',[DatauseradminController::class, 'create']);
Route::post('tdatauser',[DatauseradminController::class, 'store'])->name('tdatauser');
Route::resource('datauseradmin',DatauseradminController::class);
Route::get('/datauseradmin/status/{id}',[DatauseradminController::class, 'status']);

//data  Peminjam
Route::get('/datapeminjamanadmin',[DatapeminjamanadminController::class, 'index']);//blm
Route::get('/tambahdatapinjam',[DatapeminjamanadminController::class, 'create']);
Route::post('tdatapeminjaman',[DatapeminjamanadminController::class, 'store'])->name('tdatapeminjaman');
Route::resource('datapeminjamanadmin',DatapeminjamanadminController::class);

//data Petugas
Route::get('/datapetugasadmin',[DatapetugasadminController::class, 'index']);
Route::get('/tambahdatapetugas',[DatapetugasadminController::class, 'create']);
Route::post('tdatapetugas',[DatapetugasadminController::class, 'store'])->name('tdatapetugas');
Route::resource('datapetugasadmin',DatapetugasadminController::class);

//data
Route::get('/datapembayaran',[DatapembayaranController::class, 'index']);
Route::resource('datapembayaran',DatapetugasadminController::class);


//user

//login
Route::get('/',[LoginController::class, 'index']);
Route::get('admin/home',[LoginController::class ,'adminhome'])->name('admin.home')->middleware('role');
Route::post('/login',[LoginController::class, 'Authencitace']);

//logout
Route::post('logout',[LoginController::class, 'logout'])->name('logout');

//Dafar
Route::get('/daftar',[DaftarController::class, 'index']);
Route::post('daftar',[DaftarController::class, 'store'])->name('daftar');

//data buku
Route::get('/databuku',[DatabukuController::class, 'index']);// rev
Route::get('/detailbuku',[DatabukuController::class, 'detail']);

//data member
Route::get('/datamember',[DatamemberController::class, 'index']);//cs

//pinjam
Route::get('/peminjaman',[PinjamController::class, 'index']);//cs
Route::post('pinjam',[DatapeminjamanController::class, 'store'])->name('pinjam');

//data Peminjaman
Route::get('/datapeminjaman',[DatapeminjamanController::class, 'index']);//recs

//data Pengembalian
Route::get('/datakembali',[kembaliController::class, 'index']);
Route::resource('datakembali',kembaliController::class);

//navbar
Route::get('/navbar', function () {
    return view('user.navbar.main');
});
