<?php

use App\Http\Controllers\HostController;
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

Route::get('/register', function(){
    return view('register');
});

Route::get('/account', function(){
    return view('account');
});

Route::get('/wishlist', function(){
    return view('wishlist');
});

Route::get('/profile', function(){
    return view('profile');
});

Route::get('/income', function(){
    return view('income');
});

Route::get('/help', function(){
    return view('help');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/cardetails', function(){
    return view('cardetails');
});

Route::get('/host',function(){
    return view('host');
});

Route::get('/rentFeeds', function(){
    return view('rentFeeds');
});

Route::get('/orders', function(){
    return view('orders');
});
Route::get('/completed', function(){
    return view('completed');
});

Route::get('/host', [HostController::class, 'index']);
Route::get('/host/addCar', [HostController::class, 'add']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
});


