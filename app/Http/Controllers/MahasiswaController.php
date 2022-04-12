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
    public function ambilData(Request $request)
    {
        $this->validate($request,[
            'nim' => 'required|unique:mahasiswa|min:4',
            'nama_mahasiswa' => 'required|min:4',
            'semester' => 'required|numeric',
        ]);
        $data = Mahasiswa::create($request->all());
        // redirect
        return redirect(url('data-mahasiswa'));
        // dd($request->all());
    }
    public function destroy(Mahasiswa $id){
        $id->delete();
        return redirect(url('data-mahasiswa'));

    }
   
}
