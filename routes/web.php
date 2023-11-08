<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('home');
})->middleware('check');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});



Route::get('/addProduct', function () {
    return view('addProduct');
});

Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

//product routes
Route::post('/addProduct', [ProductController::class, 'addProduct']);

Route::get('/products', [ProductController::class, 'products']);

Route::get('/products/{product}', [ProductController::class, 'getProduct']);

Route::put('/products/{product}', [ProductController::class, 'editProduct']);