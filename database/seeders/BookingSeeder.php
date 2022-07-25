<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bookings')->insert([
            [
                "userID" => 2,
                "carID" => 1,
                "status" => 0,
                "total" => 0,
                "pickup" => '2022-05-02',
                "end" => '2022-05-04'
            ],
            [
                "userID" => 2,
                "carID" => 2,
                "status" => 0,
                "total" => 0,
                "pickup" => '2022-06-01',
                "end" => '2022-06-05'
            ],
        ]);
    }
}
