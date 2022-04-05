<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;


class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa/index', compact('data'));
    }
    public function create()
    {
        return view('mahasiswa/add');
    }
}
