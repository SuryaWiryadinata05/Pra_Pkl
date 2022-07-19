<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pengenalancontroller;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\StaffBranchController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\TampilanController;
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
    return view('welcome');
});

Route::get('/welcome', function () {
    echo '<center>';
    echo '<u>Hallo Semuanya, Apa kabar?<br>';
    echo 'Pada Kali ini Kita Sedang belajar route basic <br></u>';
    // echo '------------------------------------------------------------';
    echo '</center>';
});

// Route Basic
Route::get('/home', function () {
    return ('Hallo Ini Halaman home.php');
}); 

Route::get('/pages1', function () {
    return ('Hallo Ini Halaman Index.php');
});

Route::get('/pages2', function () {
    return ('Hallo Ini Halaman Bumi.php');
});

Route::get('/pages3', function () {
    return ('Hallo Ini Halaman Sekolah.php');
});

// Route Parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jeniskelamin}/{hobby}', function ($nama,$umur,$alamat,$jeniskelamin,$hobby) {
    return view('pages1.biodata' , compact('nama','umur','alamat','jeniskelamin','hobby'));
});


// Route Parameter
Route::get('/pesanan/{minuman?}', function ($minuman = 'Kosong') {
    return view('pages1.pesanan' , compact('minuman'));
});

Route::get('/material/{pasir urug}/{batako besar}/{bata merah}/{bata apung}', function ($pasiru,$batako,$bata,$batua){
    return view('pages1.material' , compact('pasir urug','batako besar','bata merah','bata apung'));
});

Route::get('/material/{b?}/{b1?}', function ($b = 'Mohon maaf material anda tidak ada' , $b1 = 'Mohon maaf material anda tidak ada'){
    return view('pages1.material' , compact('b','b1'));
});

Route::get('/pengenalan' ,[App\Http\Controllers\pengenalancontroller::class, 'pengenalan']);

// Route controller Parameter
Route::get('/intro/{nama}/{alamat}/{umur}' ,[pengenalancontroller::class, 'intro']);

Route::get('/siswa' , [pengenalancontroller::class, 'siswa']);

Route::get('/soal1' , [LatihanController::class, 'soal1']);

Route::get('/soal2' , [LatihanController::class, 'soal2']);

Route::get('/televisi' , [LatihanController::class, 'televisi']);

Route::get('/latihan' , [LatihanController::class, 'latihan']);

Route::get('/post' , [PostController::class, 'index']);

Route::get('/staff' , [StaffController::class, 'index']);

Route::get('/staffbranch' , [StaffBranchController::class, 'index']);

Route::get('/branch' , [BranchController::class, 'index']);

Route::get('/soal4' , [TampilanController::class, 'index']);




