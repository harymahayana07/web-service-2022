<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        return view('coba');
    }
    // jika menggunakan controller
    // public function about()
    // {
    //     return view('about',[
    //         "nama" => "HARY",
    //         "title" => "About",
    //         "nama2" => "I Made Hary Mahayana",
    //         "nim" => "1901010046",
    //         "umur" => "20",
    //         "lahir" => "07 Desember 2001",
    //         "agama" => "Hindu",
    //         "status" => "Mahasiswa",
    //         "jk" => "Pria",
    //         "kwn" => "Indonesia",
    //         "kompetensi" => "RPL",
    //         "image" => "hary.jpg"
    //     ]);
    // }

    // public function education()
    // {
    //     return view('education',[
    //         "nama" => "HARY",
    //         "title" => "Education",
    //         "tk" => "TK KEMALA BHAYANGKARI SUMBAWA BESAR",
    //         "sd" => "SD NEGERI 11 KOTA BIMA",
    //         "smp" => "SMP NEGERI 1 SUMBAWA BESAR",
    //         "sma" => "SMA NEGERI 4 KOTA MATARAM",
    //         "ubg" => "UNIVERSITAS BUMIGORA"
    //     ]);
    // }
    
    // public function portfolio()
    // {
    //     return view('portfolio',[
    //         "nama" => "HARY",
    //         "title" => "Portfolio"
    //     ]);

    // }
    // public function contact()
    // {
    //     return view('contact',[
    //         "nama" => "HARY",
    //         "title" => "Contact"
    //     ]);

    // }public function link()
    // {
    //     return view('coba',[
    //         "nama" => "HARY",
    //         "title" => "Kartu",
    //         "nama2" => "I Made Hary Mahayana",
    //         "nim" => "1901010046",
    //         "status" => "Mahasiswa",
    //         "jk" => "Pria",
    //         "kwn" => "Indonesia",
    //         "kompetensi" => "RPL"
    //     ]);
    // }
}
