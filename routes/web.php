<?php

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
    ]);
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/product/{product}', [ProductController::class, 'show']);

Route::post('/product/purchase/{product}', [ProductController::class, 'purchase']);

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register',
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login',
    ]);
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/admin/dashboard', function () {
    return view('/admin/index', [
        'title' => 'Admin Dashboard',
    ]);
});
Route::get('dashboard/products/sales', function () {
    return view('/admin/sales', [
        'title' => 'Sales',
        'purchases' => Purchase::all()
    ]);
});
