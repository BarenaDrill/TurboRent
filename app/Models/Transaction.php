<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function booking(){
        return $this->belongsTo(Booking::class);
    }

    public function cars(){
        return $this->belongsTo(Car::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
