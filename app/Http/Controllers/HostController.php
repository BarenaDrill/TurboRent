<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostController extends Controller
{
    public function index(){
        return view('host');
    }

    public function add(){
        return view('addCar');
    }

}
