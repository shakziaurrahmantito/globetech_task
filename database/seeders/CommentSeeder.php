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
        DB::table("comments")->insert([

            [
                "name" => "Hi",
                "user_id" => 1
            ],[
                "name" => "Nice",
                "user_id" => 1
            ],[
                "name" => "Thanks",
                "user_id" => 2
            ],[
                "name" => "Welcome",
                "user_id" => 2
            ],[
                "name" => "So Nice",
                "user_id" => 3
            ],

           
        ]);
    }
}
