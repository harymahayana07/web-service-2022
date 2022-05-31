<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
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

// Tugas Portfolio
Route::get('/about', function () {
    return view('about', [
        "nama" => "HARY",
        "title" => "About",
        "nama2" => "I Made Hary Mahayana",
        "nim" => "1901010046",
        "umur" => "20",
        "lahir" => "07 Desember 2001",
        "agama" => "Hindu",
        "status" => "Mahasiswa",
        "jk" => "Pria",
        "kwn" => "Indonesia",
        "kompetensi" => "RPL",
        "image" => "hary.jpg"
    ]);
});

Route::get('/education', function () {
    return view('education', [
        "nama" => "HARY",
        "title" => "Education",
        "tk" => "TK KEMALA BHAYANGKARI SUMBAWA BESAR",
        "sd" => "SD NEGERI 11 KOTA BIMA",
        "smp" => "SMP NEGERI 1 SUMBAWA BESAR",
        "sma" => "SMA NEGERI 4 KOTA MATARAM",
        "ubg" => "UNIVERSITAS BUMIGORA"
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        "nama" => "HARY",
        "title" => "Portfolio"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "nama" => "HARY",
        "title" => "Contact"
    ]);
});

Route::get('/card', function () {
    return view('coba', [
        "nama" => "HARY",
        "title" => "Kartu",
        "nama2" => "I Made Hary Mahayana",
        "nim" => "1901010046",
        "status" => "Mahasiswa",
        "jk" => "Pria",
        "kwn" => "Indonesia",
        "kompetensi" => "RPL"
    ]);
});

Route::get('/tes', function () {
    return 'I Made hary mahayana';
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Nama Mahasiswa : $nama";
});

Route::view('partial', 'partial/master');
// Route untuk Praktikum 
Route::get('data-mahasiswa', [MahasiswaController::class, 'index']);
Route::get('add-mahasiswa', [MahasiswaController::class, 'create']);
Route::post('save-mahasiswa', [MahasiswaController::class, 'ambilData'])->name('mahasiswa.save-mahasiswa');
Route::delete('delete-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('delete.mahasiswa');
Route::get('edit-mahasiswa/{id}/edit', [MahasiswaController::class, 'edit'])->name('edit.mahasiswa');
Route::put('edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('update.mahasiswa');

// tugas web 3 web route :


// Route untuk Portfolio :
// Route::get('/profile', [ProfileController::class,'index']);
// Route::get('/', [ProfileController::class,'about']);
// Route::get('/education', [ProfileController::class,'education']);
// Route::get('/portfolio', [ProfileController::class,'portfolio']);
// Route::get('/contact', [ProfileController::class,'contact']);
// Route::get('/card', [ProfileController::class,'card']);
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Auth::routes();
Route::get('/home', [HomeController::class, 'index']);
// 
Route::middleware(['auth', 'IsAdmin'])->group(function () {
    Route::get('data-blog', [BlogController::class, 'index']);
    Route::get('add-blog', [BlogController::class, 'create']);
    Route::post('save-blog', [BlogController::class, 'ambilData'])->name('blog.save-blog');
    Route::delete('delete-blog/{id}', [BlogController::class, 'destroy'])->name('delete.blog');
    Route::get('edit-blog/{id}/edit', [BlogController::class, 'edit'])->name('edit.blog');
    Route::put('edit-blog/{id}', [BlogController::class, 'update'])->name('update.blog');
});
