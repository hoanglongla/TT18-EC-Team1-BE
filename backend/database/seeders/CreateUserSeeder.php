<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                "name" => "admin",
                "email" => "admin@wifosoft.com",
                "password" => \Hash::make('admin')
            ],
            [
                "name" => "daily1",
                "email" => "daily1@wifosoft.com",
                "password" => \Hash::make('admin')
            ],
            [
                "name" => "daily2",
                "email" => "daily2@wifosoft.com",
                "password" => \Hash::make('admin')
            ],
        ]);
    }

}
