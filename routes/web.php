<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get("/", [ProductController::class,'index'])->name('products.index');
Route::get("/newproduct", [ProductController::class,'create'])->name('products.create');
Route::post("/storeproduct", [ProductController::class,'store'])->name('products.store');
Route::get("products/{id}/edit", [ProductController::class,"edit"])->name("products.edit");
Route::put("products/{id}/update", [ProductController::class,"update"])->name("products.update");
Route::get("products/{id}/delete", [ProductController::class,"destroy"])->name("products.destroy");
Route::get('products/{id}/description', [ProductController::class, 'description'])->name('products.description');

