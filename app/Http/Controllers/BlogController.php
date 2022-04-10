<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

// controller blog tugas 3
class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::all();
        return view('blog/index', compact('data'));
    }
    public function create()
    {
        return view('blog/add');
    }
    public function ambilData(Request $request)
    {
        $data = Blog::create($request->all());
        // redirect
        return redirect('data-blog');
        // dd($request->all());
    }
   
}
