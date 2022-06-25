<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    // tampil
    public function index()
    {
        $datas = Product::all();
        return response()->json([
            'pesan' => 'Data Berhasil Ditemukan',
            'data' => $datas
        ], 200);
    }
    // tampil berdasarkan id
    public function show($id)
    {
        $data = Product::find($id);
        if (empty($data)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        return response()->json(['pesan' => 'Data Berhasil Ditemukan', 'data' => $data], 200);
    }
    // create
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'id' => 'required|numeric|unique:products',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric'
        ]);
        if ($validasi->fails()) {
            return response()->json(['pesan' => 'data gagal ditambahkan', 'data' => $validasi->errors()->all()], 404);
        }
        $data = Product::create($request->all());
        return response()->json(['pesan' => 'data berhasil ditambahkan', 'data' => $data], 200);
    }
    // update
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        if (empty($products)) {
            return response()->json(['pesan' => 'data tidak ditemukan', 'data' => ''], 404);
        } else {
            $validasi = Validator::make($request->all(), [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|numeric',
                'category_id' => 'required|numeric'
            ]);
            // menambahkan validasi jika request->id dikirimkan tidak sama dengan products->id
            if ($request->id != $products->id) {
                $validasi['id'] = 'required|numeric|unique:products';
            }
            else if ($validasi->fails()) {
                return response()->json(['pesan' => 'Data Gagal diUpdate', 'data' => $validasi->errors()->all()], 404);
            }
            $products->update($request->all());
            return response()->json(['pesan' => 'Data Berhasil disimpan', 'data' => $products], 200);
        }
    }
    // Hapus
    public function destroy($id)
    {
        $products = Product::find($id);
        if (empty($products)) {
            return response()->json(['pesan' => 'Data Tidak ditemukan', 'data' => ''], 404);
        }
        $products->delete();
        return response()->json(['pesan' => 'Data Berhasil dihapus', 'data' => $products]);
    }
    // tes relasi
    public function indexRelasi()
    {
        $products = Product::with('order','category')->get();
        return response()->json(['pesan' => 'Data Berhasil ditemukan', 'data' => $products], 200);
    }
}
