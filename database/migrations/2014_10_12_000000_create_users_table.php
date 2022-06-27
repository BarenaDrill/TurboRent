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
            $table->longText('address');
            $table->string('email')->unique();
            $table->date('birthdate');
            $table->string('NIK')->unique();
            $table->string('KTPimage');
            $table->string('phoneNumber');
            $table->string('profilePhoto');

            $table->integer('carQuantity');
            $table->integer('income');

            $table->foreignId('wishlistID');
            
            $table->string('accountNumber');
            $table->string('proofImage');

            $table->foreignId('commentID');

            $table->string('password');
            $table->timestamps();
            
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
