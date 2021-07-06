<?php

namespace Database\Seeders;

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
        DB::table("product_categories")->insert([
            [
                "name" => "Phụ kiện nail",
                "note" => "Các phụ kiện nail"    
            ],
            [
                "name" => "Phụ kiện massage",
                "note" => "Các phụ kiện massage"    
            ],
        ]);

        DB::table("service_categories")->insert([
            [
                "name" => "Dịch vụ nail",
                "note" => "Các dịch vụ nail"    
            ],
            [
                "name" => "Dịch vụ massage",
                "note" => "Các dịch vụ massage"      
            ],
        ]);
    }
}
