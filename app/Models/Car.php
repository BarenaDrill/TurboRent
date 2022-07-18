<?php

namespace App\Models;

use App\Models\User;
use App\Models\Booking;
use App\Models\Comment;
use App\Models\Wishlist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function wishlist(){
        return $this->belongsTo(Wishlist::class);
    }

}
