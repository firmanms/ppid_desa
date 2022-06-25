<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashCon;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\SopsController;
use App\Http\Controllers\MaklumatController;
use App\Http\Controllers\MekanismeController;
use App\Http\Controllers\DasarhukumController;
use App\Http\Controllers\DokumenupController;
use App\Http\Controllers\HomeController;

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
//frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cari', [HomeController::class, 'cari'])->name('cari');
Route::get('/informasi_berkala', [HomeController::class, 'informasi_berkala'])->name('informasi_berkala');
Route::get('/informasi_sertamerta', [HomeController::class, 'informasi_sertamerta'])->name('informasi_sertamerta');
Route::get('/informasi_setiapsaat', [HomeController::class, 'informasi_setiapsaat'])->name('informasi_setiapsaat');
Route::get('/pemohon', [HomeController::class, 'pemohon'])->name('pemohon');
Route::get('/profils', [HomeController::class, 'profils'])->name('profils');
Route::get('/strukturs', [HomeController::class, 'strukturs'])->name('strukturs');
Route::get('/sops', [HomeController::class, 'sops'])->name('sops');
Route::get('/maklumats', [HomeController::class, 'maklumats'])->name('maklumats');
Route::get('/mekanismes', [HomeController::class, 'mekanismes'])->name('mekanismes');
Route::get('/dasarhukums', [HomeController::class, 'dasarhukums'])->name('dasarhukums');
Route::get('/jenis_dokumen', [HomeController::class, 'jenis_dokumen'])->name('jenis_dokumen');
Route::get('/jenis_informasi', [HomeController::class, 'jenis_informasi'])->name('jenis_informasi');

//dasd
Route::middleware('role:admin')->get('/dashboard', [DashCon::class, 'index']);
Route::middleware('role:admin')->get('/pemohons', [DashCon::class, 'pemohon']);
//profil
Route::middleware('role:admin')->get('/profil', [ProfilController::class, 'index']);
//Route::middleware('role:admin')->get('/dashboard', [DokumenupController::class, 'cari'])->name('cari');
//Route::middleware('role:admin')->post('/profil/store', [ProfilController::class, 'store']);
Route::middleware('role:admin')->get('/profil/{profil:id}/read', [ProfilController::class, 'read'])->name('read');
Route::middleware('role:admin')->get('/profil/{profil:id}/edit', [ProfilController::class, 'edit'])->name('edit');
Route::middleware('role:admin')->put('/profil/{profil:id}/update', [ProfilController::class, 'update'])->name('update');
//Route::middleware('role:admin')->delete('/profil/{profil:id}/delete', [ProfilController::class, 'destroy'])->name('delete');

//struktur
Route::middleware('role:admin')->get('/struktur', [StrukturController::class, 'index']);
//Route::middleware('role:admin')->get('/dashboard', [StrukturController::class, 'cari'])->name('cari');
//Route::middleware('role:admin')->post('/struktur/store', [StrukturController::class, 'store']);
Route::middleware('role:admin')->get('/struktur/{struktur:id}/read', [StrukturController::class, 'read'])->name('read');
Route::middleware('role:admin')->get('/struktur/{struktur:id}/edit', [StrukturController::class, 'edit'])->name('edit');
Route::middleware('role:admin')->put('/struktur/{struktur:id}/update', [StrukturController::class, 'update'])->name('update');
//Route::middleware('role:admin')->delete('/struktur/{struktur:id}/delete', [StrukturController::class, 'destroy'])->name('delete');

//SOP
Route::middleware('role:admin')->get('/sop', [SopsController::class, 'index']);
//Route::middleware('role:admin')->get('/dashboard', [SopsController::class, 'cari'])->name('cari');
//Route::middleware('role:admin')->post('/sop/store', [SopController::class, 'store']);
Route::middleware('role:admin')->get('/sop/{sop:id}/read', [SopsController::class, 'read'])->name('read');
Route::middleware('role:admin')->get('/sop/{sop:id}/edit', [SopsController::class, 'edit'])->name('edit');
Route::middleware('role:admin')->put('/sop/{sop:id}/update', [SopsController::class, 'update'])->name('update');
//Route::middleware('role:admin')->delete('/sop/{sop:id}/delete', [SopsController::class, 'destroy'])->name('delete');

//maklumat
Route::middleware('role:admin')->get('/maklumat', [MaklumatController::class, 'index']);
//Route::middleware('role:admin')->get('/dashboard', [MaklumatController::class, 'cari'])->name('cari');
//Route::middleware('role:admin')->post('/maklumat/store', [MaklumatController::class, 'store']);
Route::middleware('role:admin')->get('/maklumat/{maklumat:id}/read', [MaklumatController::class, 'read'])->name('read');
Route::middleware('role:admin')->get('/maklumat/{maklumat:id}/edit', [MaklumatController::class, 'edit'])->name('edit');
Route::middleware('role:admin')->put('/maklumat/{sop:id}/update', [MaklumatController::class, 'update'])->name('update');
//Route::middleware('role:admin')->delete('/maklumat/{maklumat:id}/delete', [MaklumatController::class, 'destroy'])->name('delete');

//mekanisme
Route::middleware('role:admin')->get('/mekanisme', [MekanismeController::class, 'index']);
//Route::middleware('role:admin')->get('/dashboard', [MekanismeController::class, 'cari'])->name('cari');
//Route::middleware('role:admin')->post('/mekanisme/store', [MekanismeController::class, 'store']);
Route::middleware('role:admin')->get('/mekanisme/{mekanisme:id}/read', [MekanismeController::class, 'read'])->name('read');
Route::middleware('role:admin')->get('/mekanisme/{mekanisme:id}/edit', [MekanismeController::class, 'edit'])->name('edit');
Route::middleware('role:admin')->put('/mekanisme/{sop:id}/update', [MekanismeController::class, 'update'])->name('update');
//Route::middleware('role:admin')->delete('/mekanisme/{mekanisme:id}/delete', [MekanismeController::class, 'destroy'])->name('delete');

//dasarhukum
Route::middleware('role:admin')->get('/dasarhukum', [DasarhukumController::class, 'index']);
//Route::middleware('role:admin')->get('/dashboard', [DasarhukumController::class, 'cari'])->name('cari');
//Route::middleware('role:admin')->post('/dasarhukum/store', [DasarhukumController::class, 'store']);
Route::middleware('role:admin')->get('/dasarhukum/{dasarhukum:id}/read', [DasarhukumController::class, 'read'])->name('read');
Route::middleware('role:admin')->get('/dasarhukum/{dasarhukum:id}/edit', [DasarhukumController::class, 'edit'])->name('edit');
Route::middleware('role:admin')->put('/dasarhukum/{sop:id}/update', [DasarhukumController::class, 'update'])->name('update');
//Route::middleware('role:admin')->delete('/dasarhukum/{dasarhukum:id}/delete', [DasarhukumController::class, 'destroy'])->name('delete');

Auth::routes();
Route::middleware('role:admin')->get('/dokumen/cari', [DokumenupController::class, 'cari'])->name('cari');
Route::middleware('role:admin')->get('/dokumen', [DokumenupController::class, 'index']);
//Route::middleware('role:admin')->get('/dashboard', [DokumenupController::class, 'cari'])->name('cari');
Route::middleware('role:admin')->post('/dokumen/store', [DokumenupController::class, 'store']);
Route::middleware('role:admin')->get('/dokumen/{dokumen:id}/read', [DokumenupController::class, 'read'])->name('read');
Route::middleware('role:admin')->get('/dokumen/{dokumen:id}/edit', [DokumenupController::class, 'edit'])->name('edit');
Route::middleware('role:admin')->put('/dokumen/{dokumen:id}/update', [DokumenupController::class, 'update'])->name('update');
Route::middleware('role:admin')->delete('/dokumen/{dokumen:id}/delete', [DokumenupController::class, 'destroy'])->name('delete');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::middleware('role:admin')->get('/home', function(){return 'Dashboard Admin';})->name('home');

