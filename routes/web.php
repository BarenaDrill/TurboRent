<?php

use App\Http\Controllers\HostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/account', function(){
    return view('account');
});

Route::get('/wishlist', function(){
    return view('wishlist');
});

Route::get('/income', function(){
    return view('income');
});

Route::get('/help', function(){
    return view('help');
});

Route::get('/rentFeeds', function(){
    return view('rentFeeds');
});

Route::get('/cardetails', function(){
    return view('cardetails');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/orders', function(){
    return view('orders');
});

Route::get('/completed', function(){
    return view('completed');
});

Route::get('/admin', function(){
    return view('admin');
});


Route::get('/host', [HostController::class, 'index']);
Route::get('/host/addCar', [HostController::class, 'add']);

Route::post('/profile/{id}',[ProfileController::class, 'update']);

