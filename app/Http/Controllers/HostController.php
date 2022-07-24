<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $request->validate([
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
        ]);
       
        $fileName = $request->carName.'.'.$request->carImage->extension();

        $request->file('carImage')->storeAs(
            'public/carImage', $fileName
        );
        
        Car::create([
            'carName' => $request->carName,
            'plateNumber' => $request->plateNumber,
            'price' => $request->price,
            'carImage' => $fileName,
            'userID' => 1,
            'carAddress' => $request->carAddress,
            'status' => $request->status,
            'totalRating' => $request->totalRating,
            'carType' => $request->carType,
            'fuelType' => $request->fuelType,
            'seat' => $request->seat,
            'wheelModel' => $request->wheelModel,
            'bluetooth' => $request->bluetooth,
            'aux' => $request->aux,
            'childSeat' => $request->childSeat,
            'petFriendly' => $request->petFriendly,
            'noSmoking' => $request->noSmoking,    
        ]);

        return redirect('/dashboard/carManager')->with('success', 'Game Added Successfully!');
        
    }

    public function edit($id){
        $vehicle = Car::select('*')->find($id);
        return view('updateVehicle',[
            'title' => 'Update Vehicle' , 
            'active' => 'Admin' , 
            'vehicle' => $vehicle 
        ]);        
    }

    public function destory($id){
        DB::delete('delete from cars where id = ?',[$id]);
        return redirect('/manageGame')->with('success', 'Game Deleted Successfully!');
        
    }

}
