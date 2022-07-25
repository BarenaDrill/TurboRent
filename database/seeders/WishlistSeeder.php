<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wishlists')->insert([
            "id" => 1 , 
            "carID" => 2 , 
            "userID" => 1 , 
        ]);
    }
}
