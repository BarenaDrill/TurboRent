<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index(){
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request){
        // dd($request);
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'address' => 'required',
            'phone' => 'required',
            'ktp' => 'required|image|file',
            'profile' => 'required|image|file',
            'password' => 'required_with:confirmPassword|same:confirmPassword|min:8|max:255',
            'confirmPassword' => 'min:8|max:255'
        ]);

        // if($request->file('ktp')){
        $validatedData['ktp'] = $request->file('ktp')->store('ktp-image');
        // }
        // if($request->file('profile')){
        $validatedData['profile'] = $request->file('profile')->store('profile-image');
        // }

        $validatedData['carQuantity'] = 0;
        $validatedData['income'] = 0;

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['confirmPassword'] = Hash::make($validatedData['confirmPassword']);

        User::create($validatedData);
        // $request->session()->flash('success', 'Registration Successfull! Please Login!');
        return redirect('/login')->with('success', 'Registration Successfull! Please Login!');
    }
}
