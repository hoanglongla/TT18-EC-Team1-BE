<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CreateCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $created_at = Carbon::now()->format('Y-m-d H:i:s');
        $updated_at = Carbon::now()->format('Y-m-d H:i:s');
        DB::table("product_categories")->insert([
            [
                "id" => 1,
                "name" => "Mỹ phẩm nail",
                "note" => "",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],
            [
                "id" => 2,
                "name" => "Phụ kiện nail",
                "note" => "",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],
            [
                "id" => 3,
                "name" => "Máy làm nail",
                "note" => "",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],
            [
                "id" => 4,
                "name" => "Phụ kiện trang trí nail",
                "note" => "",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],
            [
                "id" => 5,
                "name" => "Sản phẩm nail khác",
                "note" => "",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],


        ]);

        DB::table("service_categories")->insert([
            [
                "id" => 1,
                "name" => "Dịch vụ nail",
                "note" => "Các dịch vụ nail",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],
            [
                "id" => 2,
                "name" => "Dịch vụ nối mi",
                "note" => "Các dịch vụ massage",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],
            [
                "id" => 3,
                "name" => "Dịch vụ SPA",
                "note" => "Các dịch vụ massage",
                "created_at" => $created_at,
                "updated_at" => $updated_at
            ],
        ]);
        */
        $product_categories = [
            [
                "id" => 1,
                "name" => "Sơn Gel",
                "note" => "Bộ sưu tập những mẫu sơn gel theo xu hướng",
                "parent_category" => null,
                "deleted_at" => null
            ],
            [
                "id" => 2,
                "name" => "Dụng cụ làm móng",
                "note" => "Bộ sưu tập các dụng cụ làm móng tại nhà",
                "parent_category" => null,
                "deleted_at" => null
            ],
            [
                "id" => 3,
                "name" => "Móng giả",
                "note" => "Bộ sưu tập các mẫu móng giả ",
                "parent_category" => null,
                "deleted_at" => null
            ],
            [
                "id" => 4,
                "name" => "Bộ màu sơn móng",
                "note" => "Bộ sưu tập bộ màu sơn móng ",
                "parent_category" => null,
                "deleted_at" => null
            ],
            [
                "id" => 5,
                "name" => "Thương hiệu HIN NAILS",
                "note" => "Bộ sưu tập móng giả thương hiệu HIN NAILS",
                "parent_category" => null,
                "deleted_at" => null
            ],
            [
                "id" => 6,
                "name" => "Thương hiệu INNISFREE",
                "note" => "Bộ sưu tập móng giả thương hiệu INNISFREE",
                "parent_category" => null,
                "deleted_at" => null
            ]
        ];


        $service_categories = [[
            "id" => 1,
            "name" => "Chăm sóc móng tay",
            "parent_category" => null,
            "note" => "Chăm sóc, cắt tỉa, tạo hình cho móng tay"
        ],
            [
                "id" => 2,
                "name" => "Chăm sóc móng chân",
                "parent_category" => null,
                "note" => "Chăm sóc, cắt tỉa, tạo hình cho móng chân"
            ],
            [
                "id" => 3,
                "name" => "Waxing",
                "parent_category" => null,
                "note" => "Tẩy lông an toàn, hiệu quả, sử dụng công nghệ hiện đại"
            ],
            [
                "id" => 4,
                "name" => "Massage mặt và body",
                "parent_category" => null,
                "note" => "Sản phẩm chăm sóc mềm dịu, thích hợp với mọi làn da, kỹ thuật massage hiện đại"
            ],
            [
                "id" => 5,
                "name" => "Slim body Giảm béo toàn thân",
                "parent_category" => null,
                "note" => "Đặc trị giảm béo cho body, sử dụng công nghệ, sản phẩm hiện đại"
            ]
        ];
        DB::table("product_categories")->insert($product_categories);
        DB::table("service_categories")->insert($service_categories);

    }
}
