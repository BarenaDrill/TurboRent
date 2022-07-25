<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        return view('wishlist', [
            'title' => "Cart",
            'cars' => Car::all()
        ]);
    }

    public function addWishlist($id){
        
        $car = Car::find($id);
        dd($car);
        if(Wishlist::where('carID', $car->id)->where('user_id', auth()->user()->id)->exists()){
            return redirect()->back()->with('failed', 'Vehicle was already in wishlist');
        }else{
            $wishlist = new wishlist;
            $wishlist->userID = auth()->user()->id;
            $wishlist->carID = $car->id;
            $wishlist->save();
            return redirect('/wishlist');
        }

    }
}
