<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
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

Route::get('/', [Controller::class, 'dashboard'])->middleware('check');

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/addProduct', function () {
    return view('addProduct');
});

Route::get('/addAdmin', function () {
    return view('addAdmin');
});

Route::get('/profile', function () {
    return view('profile');
});



Route::post('/register', [UserController::class, 'register']);

Route::post('/login', [UserController::class, 'login']);

Route::post('/logout', [UserController::class, 'logout']);

//product routes
Route::post('/addProduct', [ProductController::class, 'addProduct']);

Route::get('/products', [ProductController::class, 'products']);

Route::get('/products/{product}', [ProductController::class, 'getProduct']);

Route::put('/products/{product}', [ProductController::class, 'editProduct']);

Route::delete('/products/{product}', [ProductController::class, 'deleteProduct']);

Route::post('/products/search', [ProductController::class, 'search']);

//User routes
Route::get('/admins', [UserController::class, 'admins']);

Route::post('/addAdmin', [UserController::class, 'addAdmin']);

Route::get('/admins/{admin}', [UserController::class, 'getAdmin']);

Route::put('/admins/{admin}', [UserController::class, 'editAdmin']);

Route::put('/admins/profile/{admin}', [UserController::class, 'editProfile']);

Route::delete('/admins/{admin}', [UserController::class, 'deleteAdmin']);

Route::post('/admins/search', [UserController::class, 'search']);


//Customer routes
Route::get('/customers', [CustomerController::class, 'customers']);

Route::post('/customers/search', [CustomerController::class, 'search']);