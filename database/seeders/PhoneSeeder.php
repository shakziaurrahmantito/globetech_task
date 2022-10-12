<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("phones")->insert([
            [
                "name" => "Mi",
                "user_id" => 1
            ],

            [
                "name" => "IPhone",
                "user_id" => 2
            ],

            [
                "name" => "Apple",
                "user_id" => 3
            ]
        ]);
    }
}
