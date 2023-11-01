<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/pro",[ProductController::class,"index"])->name("product.index");
Route::get("/pro/create",[ProductController::class,"create"])->name("product.create");
Route::post("/pro/create",[ProductController::class,"store"])->name("product.store");
Route::get("/pro/create",[ProductController::class,"show"])->name("product.show");
Route::get("/pro/delete",[ProductController::class,"delete"])->name("product.delete");
Route::post("/pro",[ProductController::class,"del"])->name("product.del");