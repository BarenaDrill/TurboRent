<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function update(Request $request){
        $rules = [
            'name' => 'required|max:255',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required|min:8|max:255'
        ];

        if($request->email != auth()->user()->email){
            $rules['email'] = 'required|email:dns|unique:users';
        }

        $validatedData = $request->validate($rules);

        User::where('id', auth()->user()->id)
            ->update($validatedData);
        
        return redirect('/profile')->with('success', 'Profile has been updated!');
    }
}
