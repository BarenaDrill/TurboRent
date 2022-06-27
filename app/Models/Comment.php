<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory;

    public function car(){
        return $this->belongsTo(Car::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
