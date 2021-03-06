<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //\App\Models\Service::factory(10)->create();
        $service = [[
            "id" => 1,
            "name" => "Nail Extensions && Gel",
            "price" => 11,
            "price_discount" => 0,
            "description" => "Màu gel bóng, kín thít, đa màu sắc, cắt tỉa đa dạng",
            "picture" => "https://www.usanailzsalon.co.uk/wp-content/uploads/2019/03/pink-and-white-ombre-design-e1553043180895-300x300.jpg",
            "time_estimate" => "3600",
            "can_book_online" => true,
            "sex_type" => 1,
            "services_categories_id" => 1,
            "created_at" => "2021-07-01 10:10:00",
            "updated_at" => "2021-08-01 10:10:00"
        ],
            [
                "id" => 2,
                "name" => "Nail Extensions && Acrylic",
                "price" => 12,
                "price_discount" => 11,
                "description" => "Đa màu săc, nhanh khô, giữ bền hơn 3 tuần",
                "picture" => "https://www.usanailzsalon.co.uk/wp-content/uploads/2019/03/coffin-shape-nails-with-shellac-on-top-and-designs-300x300.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 3,
                "name" => "Nail Extensions && Gel",
                "price" => 10,
                "price_discount" => 0,
                "description" => "Đa dạng kiểu dáng, nhiều style cắt tỉa, sơn bóng",
                "picture" => "https://my-live-05.slatic.net/p/f8eb45c71b5876cb48113a05e92e8961.jpg_720x720q80.jpg_.webp",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 4,
                "name" => "Nail Extensions && Gel with Glitter",
                "price" => 10,
                "price_discount" => 8,
                "description" => "Nhanh khô, nhiều kiểu cắt tỉa theo xu hướng, đa dạng lựa chọn cho khách hàng",
                "picture" => "https://my-live-05.slatic.net/p/8da52a76c93ee7ec31863132101c67a1.jpg_720x720q80.jpg_.webp",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 5,
                "name" => "Nail Extensions && Pink and White",
                "price" => 9,
                "price_discount" => 0,
                "description" => "Màu săc trang nhã, nghệ thuật cắt tỉa theo xu hướng",
                "picture" => "https://img.joomcdn.net/b3027434ba85bcb7d5a886442f7f70d82d0c4d56_original.jpeg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 6,
                "name" => "Nail Extensions && Toes Shellac",
                "price" => 10,
                "price_discount" => 8,
                "description" => "Cắt tỉa tỉ mỉ, nhiều sự lựa chọn kiểu dáng, màu săc cho khách hàng",
                "picture" => "https://www.usanailzsalon.co.uk/wp-content/uploads/2019/03/feet-1.jpg",
                "time_estimate" => "3600",
                "can_book_online" => false,
                "sex_type" => 1,
                "services_categories_id" => 2,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 7,
                "name" => "Nail Extensions && Hand Shellac",
                "price" => 10,
                "price_discount" => 8,
                "description" => "Chăm sóc tay, cấp ẩm, đa dạng lựa chọn theo xu hướng của khách hàng",
                "picture" => "https://beautyshape.cz/images/slidersluzby/nehty/modelaz-2018.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 2,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 8,
                "name" => "Shape & Polish on hands",
                "price" => 9,
                "price_discount" => 7,
                "description" => "Đa dạng màu sắc, kiểu dáng theo mùa",
                "picture" => "https://i.pinimg.com/564x/48/aa/e4/48aae485a30e578d754445e1300a3327.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 9,
                "name" => "Shape & Polish on toes",
                "price" => 8,
                "price_discount" => 0,
                "description" => "Chăm sóc với nhiều bước khác nhau, nhiều màu sắc, kiểu dáng",
                "picture" => "https://radiancedayspa.co.uk/wp-content/uploads/2019/04/Nails-300x221.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 2,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 10,
                "name" => "Single Nails Repair",
                "price" => 10,
                "price_discount" => 8,
                "description" => "Đa dạng màu sắc, thoải mái lựa chọn kiểu cắt tỉa",
                "picture" => "https://i.pinimg.com/564x/0b/07/9d/0b079d0d63ad16e391f09a1279ca0b41.jpg",
                "time_estimate" => "3600",
                "can_book_online" => false,
                "sex_type" => 0,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 11,
                "name" => "Single Nails Repair",
                "price" => 8,
                "price_discount" => 7,
                "description" => "Đa dạng màu sắc, thoải mái lựa chọn kiểu cắt tỉa",
                "picture" => "https://i.pinimg.com/564x/0b/07/9d/0b079d0d63ad16e391f09a1279ca0b41.jpg",
                "time_estimate" => "3600",
                "can_book_online" => false,
                "sex_type" => 0,
                "services_categories_id" => 2,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 12,
                "name" => "Nail Art Design",
                "price" => 11,
                "price_discount" => 9,
                "description" => "Xu hướng theo mùa, trending, màu sắc bắt mắt, đa dạng",
                "picture" => "https://i.pinimg.com/750x/48/f4/1f/48f41faad07373fa337ca0b925bd596f.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 13,
                "name" => "Nail Art Design",
                "price" => 11,
                "price_discount" => 10,
                "description" => "Xu hướng theo mùa, trending, màu sắc bắt mắt, đa dạng",
                "picture" => "https://i.pinimg.com/750x/48/f4/1f/48f41faad07373fa337ca0b925bd596f.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 2,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 14,
                "name" => "Smiling Gem",
                "price" => 8,
                "price_discount" => 0,
                "description" => "Thoải mái lựa chọn kiểu cắt tỉa, màu sắc",
                "picture" => "https://i.pinimg.com/750x/83/2a/af/832aaf1b5c59d63d998e4e145f9f1c01.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 1,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 15,
                "name" => "Smiling Gem",
                "price" => 8,
                "price_discount" => 0,
                "description" => "Thoải mái lựa chọn kiểu cắt tỉa, màu sắc",
                "picture" => "https://i.pinimg.com/750x/83/2a/af/832aaf1b5c59d63d998e4e145f9f1c01.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 2,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 16,
                "name" => "Hand Waxing",
                "price" => 8,
                "price_discount" => 7,
                "description" => "Làm sạch lông, mềm mại, an toàn, không dị ứng da",
                "picture" => "https://thewinnish.com/upload/5fe227b7857d5side-effects-of-waxing2.jpg",
                "time_estimate" => "1800",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 3,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 17,
                "name" => "Underarm Waxing",
                "price" => 9,
                "price_discount" => 8,
                "description" => "An toàn, tiết kiệm, da sáng, mềm mại, không dị ứng",
                "picture" => "https://www.usanailzsalon.co.uk/wp-content/uploads/2019/03/threading-3-300x200.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 3,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 18,
                "name" => "Full Leg Waxing",
                "price" => 10,
                "price_discount" => 0,
                "description" => "Sử dụng công nghệ hiện đại, làm sạch da sâu, an toàn, sáng da, mềm mại",
                "picture" => "https://www.pleiadesspa.com/data/files/beauty_services_coquitlam_17.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 3,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 19,
                "name" => "Half Leg Waxing",
                "price" => 12,
                "price_discount" => 0,
                "description" => "An toàn, hiệu quả, không gây dị ứng da, da mềm mại, sáng bóng hơn",
                "picture" => "http://sacdepvasuckhoecuaban.com/wp-content/uploads/2019/05/waxing-long.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 3,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 20,
                "name" => "Mini Facial",
                "price" => 13,
                "price_discount" => 11,
                "description" => "Da mềm mịn, sáng bóng, kết hợp với các thành phần tự nhiên làm mềm, mịn da",
                "picture" => "https://www.usanailzsalon.co.uk/wp-content/uploads/2019/03/eyelash-1-300x166.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 1,
                "services_categories_id" => 4,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 21,
                "name" => "Massage mặt",
                "price" => 13,
                "price_discount" => 12,
                "description" => "Thoải mái, thư giãn, tăng độ đàn hồi cho da, giảm thiểu nếp nhăn, tẩy tế bào chế",
                "picture" => "https://file.hstatic.net/1000286943/article/woman_face_massage_600x450_comp_1557045_0_1024x1024.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 4,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 22,
                "name" => "Massage tay",
                "price" => 14,
                "price_discount" => 12,
                "description" => "Thoải mái, thư giãn, tăng độ đàn hồi cho da, giảm thiểu nếp nhăn, tẩy tế bào chế",
                "picture" => "https://ghemassages.com/photo/tam-quat-co-truyen/tac-dung-cua-viec-nam-giu-massage-ngon-tay-trong-60-giay.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 4,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 23,
                "name" => "Massage chân",
                "price" => 12,
                "price_discount" => 10,
                "description" => "Thoải mái, thư giãn, tăng độ đàn hồi cho da, giảm thiểu nếp nhăn, tẩy tế bào chế",
                "picture" => "https://static.hotdeal.vn/images/1482/1482463/500x500/337504-massage-body-aroma-tai-huong-anh-spa-149a-pho-hue-..jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 4,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 24,
                "name" => "Giảm béo vùng bụng bằng công nghệ cao kết hợp",
                "price" => 17,
                "price_discount" => 14,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://skyspa.vn/upload/file_bai_viet/images/giam%20mo%20bung%20o%20dau%201.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 25,
                "name" => "Giảm béo vùng nây eo bằng công nghệ cao kết hợp",
                "price" => 14,
                "price_discount" => 0,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://mbcenter.vn/wp-content/uploads/2018/11/cham-soc-sau-sinh10.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 26,
                "name" => "Giảm béo vùng lưng bằng công nghệ cao kết hợp",
                "price" => 18,
                "price_discount" => 14,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://thammyvienthanhquynh.com.vn/uploaded/2017/08/Ki-thuat-massage-giam-beo-vai-va-lung.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 27,
                "name" => "Giảm béo vùng đùi bằng công nghệ cao kết hợp",
                "price" => 18,
                "price_discount" => 14,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "http://chamspamassage.com/wp-content/uploads/2021/03/massage-bap-chan-thon-gon.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 28,
                "name" => "Giảm béo vùng cánh tay bằng công nghệ cao kết hợp",
                "price" => 14,
                "price_discount" => 0,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://7gym.vn/wp-content/uploads/2020/09/21-2-1024x682.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 29,
                "name" => "Giảm béo vùng bắp tay bằng công nghệ cao kết hợp",
                "price" => 17,
                "price_discount" => 14,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://7gym.vn/wp-content/uploads/2020/09/21-2-1024x682.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 30,
                "name" => "Giảm béo vùng bắp chân bằng công nghệ cao kết hợp",
                "price" => 17,
                "price_discount" => 0,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://skyspa.vn/upload/file_bai_viet/images/giam%20mo%20bung%20o%20dau%201.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 31,
                "name" => "Giảm béo vùng bụng bằng thông kinh mạch",
                "price" => 17,
                "price_discount" => 12,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://sentaithu.com.vn/wp-content/uploads/2019/07/3-5.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ],
            [
                "id" => 32,
                "name" => "Giảm béo toàn cơ thể bằng công nghệ cao kết hợp",
                "price" => 24,
                "price_discount" => 22,
                "description" => "Thoải mái, thư giãn, hiệu quả, vẫn giữ được độ đàn hồi cho da",
                "picture" => "https://sentaithu.com.vn/wp-content/uploads/2019/07/3-5.jpg",
                "time_estimate" => "3600",
                "can_book_online" => true,
                "sex_type" => 0,
                "services_categories_id" => 5,
                "created_at" => "2021-07-01 10:10:00",
                "updated_at" => "2021-08-01 10:10:00"
            ]


        ];

        DB::table("services")->insert($service);
    }
}
