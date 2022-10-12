<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("admin_user_roles")->insert([

            [
                "admin_user_id" => 1,
                "role_id" => 1
            ],[
                "admin_user_id" => 1,
                "role_id" => 2
            ],[
                "admin_user_id" => 2,
                "role_id" => 1
            ],[
                "admin_user_id" => 2,
                "role_id" => 3
            ],[
                "admin_user_id" => 3,
                "role_id" => 1
            ],[
                "admin_user_id" => 3,
                "role_id" => 3
            ]

           
        ]);
    }
}
