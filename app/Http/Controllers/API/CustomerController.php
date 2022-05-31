<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index()
    {
        $data = Customer::all();
        return response()->json($data, 200);
        // return json_encode($data);
    }
    public function show(Customer $id)
    {
        return response()->json($id, 200);
    }
    public function create()
    {
        //
    }
   
}
