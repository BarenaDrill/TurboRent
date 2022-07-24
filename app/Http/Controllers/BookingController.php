<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->validate($request,[
            'pickupdate' => 'required',
            'enddate' => 'required',
        ]);

        $bookData = new Booking;

        $car = Car::find($id);
        if(Booking::where('carID', $car->id)->where('user_id', auth()->user()->id)->exists()){
            return redirect()->back()->with('failed', 'Vehicle was already booked before');
        }else{
            $bookData->userID = auth()->user()->id;
            $bookData->carID = $car->id;
            $bookData->pickupdate = $request->input('pickUpDate');
            $bookData->enddate = $request->input('endDate');
            $carPrice = $car->price;
            $datediff = $bookData->enddate->diffInDays($bookData->pickupdate);
            $bookData->total = $datediff * $carPrice;
            $bookData->status = 0;
        
            $bookData->save();
            return redirect('/orders')->with('success', 'Sucessfully Booking');
        }
        
    }
}

