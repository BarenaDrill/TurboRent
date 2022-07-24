<?php

use App\Http\Controllers\HostController;
use App\Http\Controllers\UserController;
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

Route::get('/income', function(){
    return view('income');
});

Route::get('/help', function(){
    return view('help');
});

Route::get('/login', function(){
    return view('login');
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

Route::get('/dashboard', [HostController::class, 'index']);
Route::get('/dashboard/carManager', [HostController::class, 'index']);
Route::get('/dashboard/carManager/addVehicle', [HostController::class, 'add']);
Route::post('/dashboard/carManager/addVehicle',[HostController::class,'store']);
Route::get('/cardetails',[UserController::class,'detail']);

// update 
Route::get('/dashboard/carManager/updateVehicle/{id}',[HostController::class, 'edit']);
Route::put('/dashboard/carManager/updateVehicle/{id}',[HostController::class, 'update']);

// delete 
Route::get('/dashboard/carManager/deleteVehicle/{id}',[HostController::class, 'destroy']);


Route::get('/profile', function(){
    return view('profile');
});
