<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Car;
use App\Models\User;
use App\Models\Comment;
use App\Models\Transaction;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function detail(){
        $user = User::all();
        $car = Car::all();
        $comment = Comment::all();

        return view('cardetails',
        [
            'users' => $user,
            'cars' => $car,
            'comments' => $comment
        ]);
    }

    public function showTrc(){
        return view('admin', [
            "transactions" => Transaction::all(),
            // "cars" => Car::all(),
            "users" => User::all(),
            "bookings" => Booking::all()
        ]);
    }
}
