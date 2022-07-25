<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function storeTrc(Request $request, $id){

        // dd($request);
        $book = Booking::find($id);
        dd($book);

        $validatedData = $request->validate([
            'proofImage' => 'required|image|file'
        ]);

        if($request->file('proofImage')){
            $validatedData['proofImage'] = $request->file('proofImage')->store('proof-image');
        }

        $validatedData['userID'] = auth()->user()->id;
        $validatedData['carID'] = $book->carID;
        $validatedData['bookID'] = $book->id;

        Transaction::create($validatedData);

        return redirect('/admin');
    }
}
