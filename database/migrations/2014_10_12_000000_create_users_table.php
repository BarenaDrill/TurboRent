<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('address');
            // $table->date('birthdate');
            // $table->string('nik')->unique();
            $table->string('phone');
            $table->string('ktp');
            $table->string('profile');
            $table->string('password');
            $table->integer('income');
            $table->integer('carQuantity');
            $table->timestamps();

            // $table->foreignId('wishlistID');
            // $table->string('accountNumber');
            // $table->string('proofImage');
            // $table->foreignId('commentID');
            // $table->timestamp('email_verified_at')->nullable();
            // $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
