<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('bookingDate');
            
            // ID ORANG YANG MINJAM , nama customer
            $table->foreignId('userID');
            $table->foreignId('carID'); 
            $table->integer('status'); //0 / 1
            // -> yang pnya mobil idnya di car
            $table->integer('total');
            $table->date('pickup');
            $table->date('end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
