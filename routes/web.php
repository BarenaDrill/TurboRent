<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Models\User;
use App\Models\Car;
use App\Models\Wishlist;
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
    return view('home',[
        'vehicles' => Car::all()
    ]);
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/wishlist', function($id){

    $wish = Wishlist::all() ; 

    return view('wishlist',[
        "wish" => $wish
    ]);
});

Route::get('/income', function(){
    return view('income');
});

Route::get('/help', function(){
    return view('help');
});

Route::get('/rentFeeds', function(){
    return view('rentFeeds',[
        'vehicles' => Car::all() 
    ]);
});


Route::get('/completed', function(){
    return view('completed');
});

Route::get('/admin', function(){
    return view('admin');
});

Route::get('/dashboard', [HostController::class, 'index']);
Route::get('/dashboard/carManager', [HostController::class, 'index']);
Route::get('/dashboard/carManager/addVehicle', [HostController::class, 'add']);
Route::post('/dashboard/carManager/addVehicle',[HostController::class,'store']);
Route::get('/cardetails/{id}',[UserController::class,'detail']);

Route::post('/cardetails/{id}',[BookingController::class, 'store']);

// update 
Route::get('/dashboard/carManager/updateVehicle/{id}',[HostController::class, 'edit']);
Route::put('/dashboard/carManager/updateVehicle/{id}',[HostController::class, 'update']);

// delete 
Route::get('/dashboard/carManager/deleteVehicle/{id}',[HostController::class, 'destroy']);


Route::get('/profile', function(){
    return view('profile');
});


Route::get('/host', [HostController::class, 'index']);
Route::get('/host/addCar', [HostController::class, 'add']);

// Route::post('/profile/{id}',[ProfileController::class, 'update']);

Route::get('/orders', [BookingController::class, 'showBookings']);
Route::get('/completed', [BookingController::class, 'showCompleted']);
Route::post('/transaction/{id}', [TransactionController::class, 'storeTrc']);
Route::post('/orders/{id}', [BookingController::class, 'update']);

Route::get('/admin', [UserController::class, 'showTrc']);

Route::post('/profile/{id}',[ProfileController::class, 'update']);
