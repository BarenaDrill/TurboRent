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
                "carImage" => "4-avanza-silver-mica-metallic.png",
                "userID" => 1,
                "carAddress" => "Jakarta",
                "status" => 0,
                "totalRating" => 5,
                "carType" => "Automatic",
                "fuelType" => "Petrol",
                "seat" => "6 Seater",
                "wheelModel" => "Front-Wheel Drive",
                "bluetooth" => "Available",
                "aux" => "Available",
                "childSeat" => "Available",
                "petFriendly" => "Available",
                "noSmoking" => "Available",
            ],
            [
                "id" => 2,
                "carName" => "Dodge Charger SRT Hellcat",
                "plateNumber" => "DB 4321 FC",
                "price" => 2000000,
                "carImage" => "hellcat.jpg",
                "userID" => 1,
                "carAddress" => "Asgard",
                "status" => 0,
                "totalRating" => 4,
                "carType" => "Manual",
                "fuelType" => "Petrol",
                "seat" => "2 Seater",
                "wheelModel" => "Rear-Wheel Drive",
                "bluetooth" => "Available",
                "aux" => "Available",
                "childSeat" => "Available",
                "petFriendly" => "Available",
                "noSmoking" => "Available",
            ],
            [
                "id" => 3,
                "carName" => "Dodge Challenger",
                "plateNumber" => "DB 1221 FC",
                "price" => 1500000,
                "carImage" => "challenger.jpg",
                "userID" => 1,
                "carAddress" => "Jakarta",
                "status" => 1,
                "totalRating" => 3,
                "carType" => "Manual",
                "fuelType" => "Petrol",
                "seat" => "2 Seater",
                "wheelModel" => "Rear-Wheel Drive",
                "bluetooth" => "Available",
                "aux" => "Not Available",
                "childSeat" => "Not Available",
                "petFriendly" => "Not Available",
                "noSmoking" => "Not Available",
            ],
            [
                "id" => 4,
                "carName" => "Ford Mustang",
                "plateNumber" => "B 1121 FF",
                "price" => 1300000,
                "carImage" => "mustang.jpg",
                "userID" => 1,
                "carAddress" => "Jakarta",
                "status" => 0,
                "totalRating" => 4,
                "carType" => "Manual",
                "fuelType" => "Petrol",
                "seat" => "2 Seater",
                "wheelModel" => "Rear-Wheel Drive",
                "bluetooth" => "Available",
                "aux" => "Not Available",
                "childSeat" => "Not Available",
                "petFriendly" => "Not Available",
                "noSmoking" => "Not Available",
            ],
            [
                "id" => 5,
                "carName" => "BMW M4 Coupe",
                "plateNumber" => "L 5423 HK",
                "price" => 1100000,
                "carImage" => "bmw.jpg",
                "userID" => 1,
                "carAddress" => "Pontianak",
                "status" => 1,
                "totalRating" => 5,
                "carType" => "Manual",
                "fuelType" => "Petrol",
                "seat" => "2 Seater",
                "wheelModel" => "Rear-Wheel Drive",
                "bluetooth" => "Available",
                "aux" => "Not Available",
                "childSeat" => "Not Available",
                "petFriendly" => "Not Available",
                "noSmoking" => "Not Available",
            ]
            
        ]);
    }
}
