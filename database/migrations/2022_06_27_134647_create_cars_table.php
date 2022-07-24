<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('carName');
            $table->string('plateNumber');
            $table->integer('price');
            $table->string('carImage');
            
            $table->foreignId('userID'); // buat nampilin di income
            $table->longText('carAddress');
            
            // $table->foreignId('commentID');
            $table->integer('status'); //buat tampilin status booking, *pake int/bool aja biar gampang check
            $table->float('totalRating'); //total dari all comment 10 -> 3 = jumlah rating/jumlah user = 3
            
            // DESCRIPTION
            $table->string('carType');
            $table->string('fuelType');
            $table->string('seat');
            $table->string('wheelModel');
            $table->string('bluetooth'); 
            $table->string('aux'); 
            $table->string('childSeat'); 
            $table->string('petFriendly'); 
            $table->string('noSmoking'); 


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
        Schema::dropIfExists('cars');
    }
}
