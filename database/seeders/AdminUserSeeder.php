<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("admin_users")->insert([

            [
                "name" => "Admin User-1",
                "email" => "adminuser@gmail.com",
                "password" => bcrypt("password")
            ], 


            [
                "name" => "Admin User-2",
                "email" => "adminuser2@gmail.com",
                "password" => bcrypt("password")
            ], 

            [
                "name" => "Admin User-3",
                "email" => "adminuser3@gmail.com",
                "password" => bcrypt("password")
            ]

           
        ]);
    }
}
