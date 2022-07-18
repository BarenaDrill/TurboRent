<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HostController extends Controller
{
    public function index(){
        return view('dashboard.index',[
            'vehicles' => Car::all()->sortByDesc('status')
        ]);

    }

    public function add(){
        return view('dashboard.addVehicle');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'carName' => 'required' , 
            'plateNumber' => 'required', 
            'price' => 'required' , 
            'carImage' => 'required|mimes:png,jpg,jpeg,svg' , 
            // userID
            'carAddress' => 'required' , 
            'status' => 'required' , 
            'totalRating' => 'required' , 
            'carType' => 'required' , 
            'fuelType' => 'required' , 
            'seat' => 'required' , 
            'wheelModel' => 'required' , 
            'bluetooth' => 'required' , 
            'aux' => 'required' , 
            'childSeat' => 'required' , 
            'petFriendly' => 'required' , 
            'noSmoking' => 'required' , 
            'carImage' => 'required' 
        ]);

        $file = $request->file('carImage');
        $extension = $file->getClientOriginalExtension();

        $file->storeAs('carImage',$file->getClientOriginalName()); 

        
        // dd($request->all());
        $validateData['carImage'] = $file->getClientOriginalName();


        $validateData['userID'] = '1' ;

        // dd($validateData['carImage']);
        
        Car::create($validateData);
        return redirect('/dashboard/carManager')->with('success', 'Game Added Successfully!');
        
    }

}
