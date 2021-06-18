<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\String\s;

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
        $user_faker = [
            [
                "username" => "admin",
                "email" => "admin@wifosoft.com",
                "password" => \Hash::make('admin'),
                "role" => 0,
                "is_customer" => false
            ],
            [
                "username" => "daily1",
                "email" => "daily1@wifosoft.com",
                "password" => \Hash::make('admin'),
                "role" => 1,
                "is_customer" => false
            ],
            [
                "username" => "daily2",
                "email" => "daily2@wifosoft.com",
                "password" => \Hash::make('admin'),
                "role" => 1,
                "is_customer" => false
            ],
        ];

        DB::table("users")->insert($user_faker);
        DB::table("user_informations")->insert([
            [
                "user_id" =>1,
                "tail_id" => null,
                "fullname" => "Trần Minh Đức",
                "company" => "Wifosoft",
                "phone" => "0123456789",
                "address" => "Hồ Chí Minh",
                "bio" => "Admin bio"
            ],
            [
                "user_id" =>2,
                "tail_id" => 1,
                "fullname" => "Quản lý đại lý 1",
                "company" => "Wifosoft",
                "phone" => "0123456789",
                "address" => "Hồ Chí Minh",
                "bio" => "Admin bio"
            ],
            [
                "user_id" =>3,
                "tail_id" => 2,
                "fullname" => "Quản lý đại lý 2",
                "company" => "Wifosoft",
                "phone" => "0123456789",
                "address" => "Hồ Chí Minh",
                "bio" => "Admin bio"
            ],
        ]);
    }

}
