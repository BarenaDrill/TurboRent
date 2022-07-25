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
    public function detail($id){
        
        $car = Car::all()->where('id',$id)->first();
        $user = User::all()->where('id',$car->userID)->first();
        $comment = Comment::all();

        return view('cardetails',
        [
            'user' => $user,
            'car' => $car,
            'comments' => $comment,
      
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


