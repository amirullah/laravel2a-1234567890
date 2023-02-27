<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     return "Ini adalah Hello World";
// });

// Route::get('/mahasiswa/profil/coba', function () {
//     echo '<h2 style="text-align: center"><u>Welcome Profil Coba</u></h2>';
//     });

// Route::get('/mahasiswa/{nama}', function ($nama) {
// return "Tampilkan data mahasiswa bernama $nama";
// });

// Route::get('/stok_barang/{jenis}/{merek}/{tes}', function ($jenis,$merek,$tes) {
//     return "Cek sisa stok untuk $jenis $merek $tes";
//     });

Route::get('/home', function () {
    return view('halaman_home');
    });
    
    // Route::get('/mahasiswa', function () {
    // return View::make('mahasiswa');
    // });
    