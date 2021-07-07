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
        //
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
    }
}
