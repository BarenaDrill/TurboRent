<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            [
                "id" => 1,
                "carName" => "Avanza",
                "plateNumber" => "B 1234 JK",
                "price" => 250000,
                "carImage" => "photo1.jpg",
                "userID" => 1,
                "carAddress" => "Jakarta",
                "status" => 0,
                "carType" => "Matic",
                "fuelType" => "",
                "seat" => "",
                "wheelModel" => "",
            ],
        ]);
    }
}
