<?php
use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\API\ProductController;
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

// untuk tabel customer tanpa penggunaan resource
Route::get('v1/customer', [CustomerController::class, 'index']);
Route::get('v1/customer/{id}', [CustomerController::class, 'show']);
Route::post('v1/customer', [CustomerController::class, 'store']);
Route::put('v1/customer/{id}', [CustomerController::class, 'update']);
Route::delete('v1/customer/{id}', [CustomerController::class, 'destroy']);
// tes relasi antar tabel
Route::get('v1/customerR', [CustomerController::class, 'indexRelasi']);

// untuk tabel orders tanpa penggunaan resource
Route::get('v1/order', [OrderController::class, 'index']);
Route::get('v1/order/{id}', [OrderController::class, 'show']);
Route::post('v1/order', [OrderController::class, 'store']);
Route::put('v1/order/{id}', [OrderController::class, 'update']);
Route::delete('v1/order/{id}', [OrderController::class, 'destroy']);
//tes relasi antar tabel
Route::get('v1/orderR', [OrderController::class, 'indexRelasi']);

// untuk tabel products tanpa penggunaan resource
Route::get('v1/product', [ProductController::class, 'index']);
Route::get('v1/product/{id}', [ProductController::class, 'show']);
Route::post('v1/product', [ProductController::class, 'store']);
Route::put('v1/product/{id}', [ProductController::class, 'update']);
Route::delete('v1/product/{id}', [ProductController::class, 'destroy']);
//tes relasi antar tabel
Route::get('v1/producR', [ProductController::class, 'indexRelasi']);

// untuk tabel Categories tanpa penggunaan resource
Route::get('v1/categorie', [CategorieController::class, 'index']);
Route::get('v1/categorie/{id}', [CategorieController::class, 'show']);
Route::post('v1/categorie', [CategorieController::class, 'store']);
Route::put('v1/categorie/{id}', [CategorieController::class, 'update']);
Route::delete('v1/categorie/{id}', [CategorieController::class, 'destroy']);
//tes relasi antar tabel
Route::get('v1/categoriR', [CategorieController::class, 'indexRelasi']);