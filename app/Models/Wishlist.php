<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wishlist extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function cars(){
        return $this->hasMany(Car::class);
    }
}
