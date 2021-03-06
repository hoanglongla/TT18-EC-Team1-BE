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
                "fullname" => "Nguy???n Qu???n Tr???",
                "company" => "Beauty Hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",
                "bio" => "Admin bio"
            ],
            [
                "user_id" => 2,
                "fullname" => "Nguy???n H???u Ngh??a",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",
                "bio" => "Qu???n l?? chi nh??nh 1"
            ],
            [
                "user_id" => 3,
                "fullname" => "Nguy???n Anh Th??",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Qu???n l?? chi nh??nh 2"
            ],
            [
                "user_id" => 4,
                "fullname" => "Nguy???n H???u Ngh??a",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Qu???n l?? chi nh??nh 3"
            ],
            [
                "user_id" => 5,
                "fullname" => "L?? Ho??i Nam",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Qu???n l?? chi nh??nh 4"
            ],
            [
                "user_id" => 6,
                "fullname" => "H?? Nh?? ??",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Qu???n l?? chi nh??nh 5"
            ],

            [
                "user_id" => 7,
                "fullname" => "H?? Nh?? Mai",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Nh??n vi??n sale 1"
            ],
            [
                "user_id" => 8,
                "fullname" => "Nguy???n Thi Thi",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Nh??n vi??n sale 2"
            ],
            [
                "user_id" => 9,
                "fullname" => "Tr???n Qu???c Th??i",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Nh??n vi??n sale 3"
            ],
            [
                "user_id" => 10,
                "fullname" => "Nguy???n Thi Thi",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Nh??n vi??n sale 2"
            ],
            [
                "user_id" => 11,
                "fullname" => "Tr???n Ph????ng Anh",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Nh??n vi??n d???ch v??? 1"
            ],

            [
                "user_id" => 12,
                "fullname" => "Tr???n H???i Anh",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Nh??n vi??n d???ch v??? 2"
            ],
            [
                "user_id" => 13,
                "fullname" => "L?? Minh Th??nh",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Kh??ch h??ng 1"
            ],
            [
                "user_id" => 14,
                "fullname" => "L?? Nh?? Anh",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Kh??ch h??ng 2"
            ],
            [
                "user_id" => 15,
                "fullname" => "L?? ?? Nh??",
                "fullname" => "L?? ?? Nh??",
                "company" => "Beauty hand",
                "phone" => "0981418283",
                "address" => "H??? Ch?? Minh",

                "bio" => "Kh??ch h??ng 3"
            ]
        ]);
    }
}
