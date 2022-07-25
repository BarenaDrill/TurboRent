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
                "ktp" => "photo1.jpg",
                "phone" => "08111111111",
                "profile" => "prof1.jpg",
                "carQuantity" => 0,
                "income" => 0,
                "password" => Hash::make("anton123"),
                "role" => "user"
            ],
            [
                "id" => 2,
                "name" => "Budi",
                "address" => "Jakarta",
                "email" => "Budi@gmail.com",
                "ktp" => "photo2.jpg",
                "phone" => "08442323323",
                "profile" => "prof2.jpg",
                "carQuantity" => 0,
                "income" => 0,
                "password" => Hash::make("budi123"),
                "role" => "admin"
            ],
            [
                "id" => 3,
                "name" => "Tono",
                "address" => "Bandung",
                "email" => "Tono@gmail.com",
                "ktp" => "photo3.jpg",
                "phone" => "09272272",
                "profile" => "prof3.jpg",
                "carQuantity" => 0,
                "income" => 0,
                "password" => Hash::make("tono123"),
                "role" => 'user'
            ],
        ]);
    }
}
