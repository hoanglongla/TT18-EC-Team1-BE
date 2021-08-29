<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $tails = [
            [
                "id" => 1,
                "name" => "Beauty hand 1",
                "phone" => "0971310282",
                "bio" => "Chi nhánh 1",
                "district" => "quận 1",
                "ward" => "phường 10",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 2,
                "name" => "Beauty hand 2",
                "phone" => "0971320282",
                "bio" => "Chi nhánh 2",
                "district" => "quận 2",
                "ward" => "phường 4",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 3,
                "name" => "Beauty hand 3",
                "phone" => "0971313282",
                "bio" => "Chi nhánh 3",
                "district" => "quận 3",
                "ward" => "phường 5",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 4,
                "name" => "Beauty hand 4",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 4",
                "district" => "quận 4",
                "ward" => "phường 10",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 5,
                "name" => "Beauty hand 5",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 5",
                "district" => "quận 5",
                "ward" => "phường 6",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 6,
                "name" => "Beauty hand 6",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 6",
                "district" => "quận 6",
                "ward" => "phường 8",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 7,
                "name" => "Beauty hand 7",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 7",
                "district" => "quận 7",
                "ward" => "phường Tân Hưng",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 8,
                "name" => "Beauty hand 8",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 8",
                "district" => "quận 8",
                "ward" => "phường 10",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 9,
                "name" => "Beauty hand 9",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 9",
                "district" => "quận 9",
                "ward" => "phường 3",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 10,
                "name" => "Beauty hand 10",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 10",
                "district" => "quận 10",
                "ward" => "phường 10",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 11,
                "name" => "Beauty hand 11",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 11",
                "district" => "quận 11",
                "ward" => "phường 5",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 12,
                "name" => "Beauty hand 12",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 12",
                "district" => "quận 12",
                "ward" => "phường 10",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 13,
                "name" => "Beauty hand 13",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 13",
                "district" => "quận Bình Thạnh",
                "ward" => "phường 10",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ],
            [
                "id" => 14,
                "name" => "Beauty hand 14",
                "phone" => "0971310082",
                "bio" => "Chi nhánh 14",
                "district" => "quận Bình Tân",
                "ward" => "phường 6",
                "city" => "Hồ Chí Minh",
                "country" => "Việt Nam"
            ]
        ];
        DB::table("tails")->insert($tails);

    }
}
