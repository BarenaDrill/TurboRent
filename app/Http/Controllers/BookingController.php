<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Booking;
use App\Models\Transaction;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cardetails');
    }

    public function showBookings(){
        return view('orders',[
            "bookings" => Booking::all(),
            "cars" => Car::all(),
            "transactions" => Transaction::all()
        ]);
    }

    public function showCompleted(){
        return view('completed',[
            "bookings" => Booking::all(),
            "cars" => Car::all(),
            "transactions" => Transaction::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

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
            $bookData->bookingDate = getdate();
            $bookData->userID = auth()->user()->id;
            $bookData->carID = $car->id;
            $bookData->pickupdate = $request->input('pickUpDate');
            $bookData->enddate = $request->input('endDate');
            $carPrice = $car->price;
            $datediff = $bookData->enddate->diffInDays($bookData->pickupdate);
            $bookData->total = $datediff * $carPrice;
        
            $bookData->save();
            return redirect('/orders')->with('success', 'Sucessfully Booking');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {   
        // dd(Transaction::all());
        $transaction = Transaction::all()->where('bookID', $id);
        dd($transaction);

        // dd(Booking::all()->where('id', $transaction->bookingID));
        Booking::where('id', $transaction->bookID)
                ->update(['status' => 1]);
        
        return redirect('/admin');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}

