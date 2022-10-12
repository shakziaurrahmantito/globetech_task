<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\AdminUserRoleSeeder;
use Database\Seeders\AdminUserSeeder;
use Database\Seeders\CommentSeeder;
use Database\Seeders\PhoneSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\userSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //\App\Models\User::factory(1)->create();

         $this->call([
            AdminUserRoleSeeder::class,
            AdminUserSeeder::class,
            CommentSeeder::class,
            PhoneSeeder::class,
            RoleSeeder::class,
            userSeeder::class
         ]);
    }
}
