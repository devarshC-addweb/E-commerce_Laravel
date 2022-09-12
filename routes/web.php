<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::get('/registration', function () {
    return view('registration');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/logout', function () {
    Session::forget('user');
    return view('/login');
});
  
Route::post('login',[UserController::class,'login']);
Route::post('/userRegistration',[UserController::class,'userRegistration']);
Route::get('/',[ProductController::class,'index']);
Route::get('/details/{id}',[ProductController::class,'details']);
Route::post('/add_cart',[ProductController::class,'addCart']);
Route::get('/cartlist',[ProductController::class,'cartList']);
Route::get('/remove_cart/{id}',[ProductController::class,'removeCart']);
Route::get('/order',[ProductController::class,'orderItem']);
Route::post('/orderplace',[ProductController::class,'orderPlace']);
Route::get('/myorders',[ProductController::class,'myOrders']);