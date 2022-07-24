<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\User;
use App\Models\Comment;
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
}
