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
        // 0 admin 1 tail/manager 2 staff 3 service_Staff 10 custoimer
        $user_faker = [
            [
                "username" => "admin",
                "email" => "admin@wifosoft.com",
                "password" => \Hash::make('admin'),
                "role" => 0,
                "tail_id" => null,
                "is_customer" => false
            ],
            [
                "username" => "manager1",
                "email" => "manager1@gmail.com",
                "password" => \Hash::make("manager"),
                "role" => 1,
                "tail_id" => 1,
                "is_customer" => false
            ],
            [
                "username" => "manager2",
                "email" => "manager2@gmail.com",
                "password" => \Hash::make("manager"),
                "role" => 1,
                "tail_id" => 2,
                "is_customer" => false
            ],
            [
                "username" => "manager3",
                "email" => "manager3@gmail.com",
                "password" => \Hash::make("manager"),
                "role" => 1,
                "tail_id" => 3,
                "is_customer" => false
            ],
            [
                "username" => "manager4",
                "email" => "manager4@gmail.com",
                "password" => \Hash::make("manager"),
                "role" => 1,
                "tail_id" => 4,
                "is_customer" => false
            ],
            [
                "username" => "manager5",
                "email" => "manager5@gmail.com",
                "password" => \Hash::make("manager"),
                "role" => 1,
                "tail_id" => 5,
                "is_customer" => false
            ],
            [
                "username" => "sale_staff1",
                "email" => "sale_staff1@gmail.com",
                "password" => \Hash::make("staff"),
                "role" => 2,
                "tail_id" => 1,
                "is_customer" => false
            ],
            [
                "username" => "sale_staff2",
                "email" => "sale_staff2@gmail.com",
                "password" => \Hash::make("staff"),
                "role" => 2,
                "tail_id" => 1,
                "is_customer" => false
            ],
            [
                "username" => "sale_staff3",
                "email" => "sale_staff3@gmail.com",
                "password" => \Hash::make("staff"),
                "role" => 2,
                "tail_id" => 1,
                "is_customer" => false
            ],
            [
                "username" => "service_staff1",
                "email" => "service_staff1@gmail.com",
                "password" => \Hash::make("staff"),
                "role" => 3,
                "tail_id" => 1,
                "is_customer" => false
            ],
            [
                "username" => "service_staff2",
                "email" => "service_staff2@gmail.com",
                "password" => \Hash::make("staff"),
                "role" => 3,
                "tail_id" => 1,
                "is_customer" => false
            ],

            [
                "username" => "customer_1",
                "email" => "customer_1@gmail.com",
                "password" => \Hash::make("customer"),
                "role" => 10,
                "tail_id" => null,
                "is_customer" => true
            ],

            [
                "username" => "customer_2",
                "email" => "customer_2@gmail.com",
                "password" => \Hash::make("customer"),
                "role" => 10,
                "tail_id" => null,
                "is_customer" => true
            ],
            [
                "username" => "customer_3",
                "email" => "customer_3@gmail.com",
                "password" => \Hash::make("customer"),
                "role" => 10,
                "tail_id" => null,
                "is_customer" => true
            ],

        ];

        DB::table("users")->insert($user_faker);
        DB::table("user_informations")->insert([
            [
                "user_id" => 1,
                "fullname" => "Nguyễn Quản Trị",
                "company" => "Beauty Hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",
                "bio" => "Admin bio"
            ],
            [
                "user_id" => 2,
                "fullname" => "Nguyễn Hữu Nghĩa",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",
                "bio" => "Quản lý chi nhánh 1"
            ],
            [
                "user_id" => 3,
                "fullname" => "Nguyễn Anh Thư",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Quản lý chi nhánh 2"
            ],
            [
                "user_id" => 4,
                "fullname" => "Nguyễn Hữu Nghĩa",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Quản lý chi nhánh 3"
            ],
            [
                "user_id" => 5,
                "fullname" => "Lê Hoài Nam",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Quản lý chi nhánh 4"
            ],
            [
                "user_id" => 6,
                "fullname" => "Hà Như Ý",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Quản lý chi nhánh 5"
            ],

            [
                "user_id" => 7,
                "fullname" => "Hà Như Mai",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Nhân viên sale 1"
            ],
            [
                "user_id" => 8,
                "fullname" => "Nguyễn Thi Thi",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Nhân viên sale 2"
            ],
            [
                "user_id" => 9,
                "fullname" => "Trần Quốc Thái",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Nhân viên sale 3"
            ],
            [
                "user_id" => 10,
                "fullname" => "Nguyễn Thi Thi",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Nhân viên sale 2"
            ],
            [
                "user_id" => 11,
                "fullname" => "Trần Phương Anh",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Nhân viên dịch vụ 1"
            ],

            [
                "user_id" => 12,
                "fullname" => "Trần Hải Anh",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Nhân viên dịch vụ 2"
            ],
            [
                "user_id" => 13,
                "fullname" => "Lê Minh Thành",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Khách hàng 1"
            ],
            [
                "user_id" => 14,
                "fullname" => "Lê Như Anh",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Khách hàng 2"
            ],
            [
                "user_id" => 15,
                "fullname" => "Lê Ý Như",
                "fullname" => "Lê Ý Như",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "Hồ Chí Minh",

                "bio" => "Khách hàng 3"
            ]
        ]);
    }
}
