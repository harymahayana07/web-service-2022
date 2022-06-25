<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// tidak perlu login dengan barear access token untuk mengakses :
Route::group(['middleware'=>'api','prefix'=>'v1'],function($router){
    // untuk tabel customer
    Route::get('customer', [CustomerController::class, 'index']);
    Route::get('customer/{id}', [CustomerController::class, 'show']);
    Route::post('customer', [CustomerController::class, 'store']);
    Route::put('customer/{id}', [CustomerController::class, 'update']);
    Route::delete('customer/{id}', [CustomerController::class, 'destroy']);
    // tes relasi antar tabel
    Route::get('customerR', [CustomerController::class, 'indexRelasi']);

    // untuk tabel orders
    Route::get('order', [OrderController::class, 'index']);
    Route::get('order/{id}', [OrderController::class, 'show']);
    Route::post('order', [OrderController::class, 'store']);
    Route::put('order/{id}', [OrderController::class, 'update']);
    Route::delete('order/{id}', [OrderController::class, 'destroy']);
    //tes relasi antar tabel
    Route::get('orderR', [OrderController::class, 'indexRelasi']);
});

// setelah login dengan barear access token : (tugas sebelumnya pada tabel products & categories)
Route::group(['middleware' => 'auth:api', 'prefix'=>'v1'], function ($router) {
    // untuk tabel products
    Route::get('product', [ProductController::class, 'index']);
    Route::get('product/{id}', [ProductController::class, 'show']);
    Route::post('product', [ProductController::class, 'store']);
    Route::put('product/{id}', [ProductController::class, 'update']);
    Route::delete('product/{id}', [ProductController::class, 'destroy']);
    //tes relasi antar tabel
    Route::get('producR', [ProductController::class, 'indexRelasi']);

    // untuk tabel Categories
    Route::get('categorie', [CategorieController::class, 'index']);
    Route::get('categorie/{id}', [CategorieController::class, 'show']);
    Route::post('categorie', [CategorieController::class, 'store']);
    Route::put('categorie/{id}', [CategorieController::class, 'update']);
    Route::delete('categorie/{id}', [CategorieController::class, 'destroy']);
    //tes relasi antar tabel
    Route::get('categoriR', [CategorieController::class, 'indexRelasi']);
});

    // praktikum tanggal 21 juni 2022
Route::group(['middleware' => 'api'], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
   
    Route::get('password', function () {
        return bcrypt('hary123');
    });
});