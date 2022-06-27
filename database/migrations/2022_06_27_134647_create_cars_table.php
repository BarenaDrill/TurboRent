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
            
            $table->foreignId('userID');
            $table->longText('carAddress');
            
            $table->foreignId('commentID');
            $table->string('status');
            $table->float('rating');
            
            // DESCRIPTION
            $table->string('carType');
            $table->string('fuelType');
            $table->string('seat');
            $table->string('wheelModel');
            $table->boolean('bluetooth'); 
            $table->boolean('aux'); 
            $table->boolean('childSeat'); 
            $table->boolean('petFriendly'); 
            $table->boolean('noSmoking'); 


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
