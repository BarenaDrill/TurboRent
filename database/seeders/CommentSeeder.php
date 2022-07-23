<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                "id" => 1,
                "userID" => 1,
                "carID" => 1,
                "rating" => 5,
                "comment" => "Good car"
            ],
            [
                "id" => 2,
                "userID" => 2,
                "carID" => 1,
                "rating" => 4,
                "comment" => "Nice car"
            ],
            [
                "id" => 3,
                "userID" => 3,
                "carID" => 1,
                "rating" => 5,
                "comment" => "Great"
            ],
        ]);
    }
}
