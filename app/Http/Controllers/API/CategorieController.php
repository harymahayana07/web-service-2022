<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Support\Facades\Validator;

class CategorieController extends Controller
{
    // tampil
    public function index()
    {
        $datas = Categorie::all();
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $datas
        ], 200);
    }
    // tampil berdasarkan id
    public function show($id)
    {
        $data = Categorie::find($id);
        if (empty($data)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        return response()->json(['pesan' => 'Data Berhasil Ditemukan', 'data' => $data], 200);
    }
    // create
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'id' => 'required|numeric|unique:categories',
            'name' => 'required',
            
        ]);
        if ($validasi->fails()) {
            return response()->json(['pesan' => 'data gagal ditambahkan', 'data' => $validasi->errors()->all()], 404);
        }
        $data = Categorie::create($request->all());
        return response()->json(['pesan' => 'data berhasil ditambahkan', 'data' => $data], 200);
    }
    // update
    public function update(Request $request, $id)
    {
        $category = Categorie::find($id);
        if (empty($category)) {
            return response()->json(['pesan' => 'data tidak ditemukan', 'data' => ''], 404);
        } else {
            $validasi = Validator::make($request->all(), [
                'id' => 'required|numeric|unique:categories',
                'name' => 'required',
                
            ]);
            if ($validasi->fails()) {
                return response()->json(['pesan' => 'Data Gagal diUpdate', 'data' => $validasi->errors()->all()], 404);
            }
            $category->update($request->all());
            return response()->json(['pesan' => 'Data Berhasil disimpan', 'data' => $category], 200);
        }
    }
    // Hapus
    public function destroy($id)
    {
        $category = Categorie::find($id);
        if (empty($category)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        $category->delete();
        return response()->json(['pesan' => 'Data Berhasil dihapus', 'data' => $category]);
    }
    // tes relasi
    public function indexRelasi()
    {
        $category = Categorie::with('product')->get();
        return response()->json(['pesan' => 'Data Berhasil ditemukan', 'data' => $category], 200);
    }
}
