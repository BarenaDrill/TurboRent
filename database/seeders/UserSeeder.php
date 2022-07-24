<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "id" => 1,
                "name" => "Anton",
                "address" => "Jakarta",
                "email" => "Anton@gmail.com",
                "birthdate" => "1990-12-14 00:00:00",
                "NIK" => "1234",
                "KTPimage" => "photo1.jpg",
                "phoneNumber" => "08111111111",
                "profilePhoto" => "prof1.jpg",
                "carQuantity" => 0,
                "income" => 0,
                "accountNumber" => "234599",
                "proofImage" => "proof1.jpg",
                "password" => Hash::make("anton123"),
            ],
            [
                "id" => 2,
                "name" => "Budi",
                "address" => "Jakarta",
                "email" => "Budi@gmail.com",
                "birthdate" => "1988-3-7 00:00:00",
                "NIK" => "72828",
                "KTPimage" => "photo2.jpg",
                "phoneNumber" => "08442323323",
                "profilePhoto" => "prof2.jpg",
                "carQuantity" => 0,
                "income" => 0,
                "accountNumber" => "432423",
                "proofImage" => "proof2.jpg",
                "password" => Hash::make("budi123"),
            ],
            [
                "id" => 3,
                "name" => "Tono",
                "address" => "Bandung",
                "email" => "Tono@gmail.com",
                "birthdate" => "1997-12-25 00:00:00",
                "NIK" => "83738",
                "KTPimage" => "photo3.jpg",
                "phoneNumber" => "09272272",
                "profilePhoto" => "prof3.jpg",
                "carQuantity" => 0,
                "income" => 0,
                "accountNumber" => "86858",
                "proofImage" => "proof3.jpg",
                "password" => Hash::make("tono123"),
            ],
        ]);
    }
}
