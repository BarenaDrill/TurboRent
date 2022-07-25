<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Booking;
use App\Models\Comment;
use App\Models\Wishlist;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function wishlists(){
        return $this->hasMany(Wishlist::class);
    }

    public function transactions(){
        return $this->hasMany(Transactions::class);
    }
}
