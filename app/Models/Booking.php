<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
<<<<<<< HEAD
    
=======

>>>>>>> d2c2fcdb3a8df33943954f7882ae5351d7828a43
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

}
