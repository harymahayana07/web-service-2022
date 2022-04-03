<?php
use App\Http\Controllers\ProfileController;
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

Route::get('/education', function(){
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
Route::get('/portfolio', function(){
    return view('portfolio',[
        "nama" => "HARY",
        "title" => "Portfolio"
    ]);
});

Route::get('/contact', function(){
    return view('contact',[
        "nama" => "HARY",
        "title" => "Contact"
    ]);
});

Route::get('/card', function(){
    return view('coba',[
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

Route::get('/tes', function(){
    return'I Made hary mahayana';
});


Route::get('/mahasiswa/{nama}', function ($nama){
    return "Nama Mahasiswa : $nama";
});

Route::get('/profile', [ProfileController::class,'index']);

// Route::get('/', [ProfileController::class,'about']);
// Route::get('/education', [ProfileController::class,'education']);
// Route::get('/portfolio', [ProfileController::class,'portfolio']);
// Route::get('/contact', [ProfileController::class,'contact']);
// Route::get('/card', [ProfileController::class,'card']);
