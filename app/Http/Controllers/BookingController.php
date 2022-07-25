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
        // dd($request);

        $car = Car::find($id);


        if(Booking::where('carID', $car->id)->where('userID', auth()->user()->id)->exists()){
            return redirect()->back()->with('failed', 'Vehicle was already booked before');
            }else{
                $validatedData = $request->validate([
                    'pickupdate' => 'required',
                    'enddate' => 'required',
                ]);

                $validatedData['userID'] = auth()->user()->id;
            $validatedData['carID'] = $car->id;
            $validatedData['pickup'] = $request->pickupdate;
            $validatedData['end'] = $request->enddate;
            $carPrice = $car->price;
            $ends = \Carbon\Carbon::parse($request->enddate);
            $picks = \Carbon\Carbon::parse($request->pickupdate);
            $datediff = $ends->diffInDays($picks);
            $validatedData['total'] = $datediff * $carPrice;
            $validatedData['status'] = 0;

            Booking::create($validatedData);
            return redirect('/orders')->with('success', 'Sucessfully Booking');
            }

        // $car = Car::find($id);
        // if(Booking::where('carID', $car->id)->where('userID', auth()->user()->id)->exists()){
        //     return redirect()->back()->with('failed', 'Vehicle was already booked before');
        // }else{
        //     $bookData->userID = auth()->user()->id;
        //     $bookData->carID = $car->id;
        //     $bookData->pickup = $request->pickupdate;
        //     $bookData->end = $request->enddate;
        //     $carPrice = $car->price;
        //     $datediff = $bookData->end->diffInDays($bookData->pickup);
        //     $bookData->total = $datediff * $carPrice;
        //     $bookData->status = 0;
        
        //     $bookData->save();
        //     
        // }
        
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
        $transaction = Transaction::all()->where('bookID', $id)->first();
        // $transaction = Transaction::find($id);
        // dd($transaction);

        // dd(Booking::all()->where('id', $transaction->bookingID));
        $test = Booking::where('id', $transaction->bookID)->update(['status' => 1]); 

        // dd($test);
        
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

