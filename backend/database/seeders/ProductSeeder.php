<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\Product::factory(10)->create();
        $products = [[
            "name" => "Nail Builder Acrylic UV sơn gel Jar",
            "price" => "20",
            "price_discount" => "14",
            "description" => "Trong suốt, trắng, hồng",
            "picture" => "https://www.good-nail.com/wp-content/uploads/2020/09/3000color.jpg",
            "stock" => "30",
            "amount" => "100",
            "unit" => "gam",
            "products_categories_id" => 1,
            "created_at" => "2021-07-01 08:30:00",
            "updated_at" => "2021-07-20 08:00:00"
        ],
            [
                "name" => "Gel đánh bóng màu",
                "price" => "25",
                "price_discount" => "20",
                "description" => "Không làm xỉn màu hay mất đi độ bóng trong suốt 3 tuần, ít chip hơn, sáng hơn, nhanh khô",
                "picture" => "https://www.good-nail.com/wp-content/uploads/2021/06/121417580_198160788572395_6467246641799399463_n.jpg",
                "stock" => "30",
                "amount" => "150",
                "unit" => "gam",
                "products_categories_id" => 1,
                "created_at" => "2021-07-01 08:30:00",
                "updated_at" => "2021-07-20 08:00:00"
            ],
            [
                "name" => "DND DC Gel+Polish Full Collection 180 Colors*",
                "price" => "15",
                "price_discount" => "10",
                "description" => "Thay đổi màu sắc khi nhiệt độ thay đổi, có 38 màu",
                "picture" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/DCFULL_1080x.jpg?v=1599500719",
                "stock" => "30",
                "amount" => "150",
                "unit" => "gam",
                "products_categories_id" => 1,
                "created_at" => "2021-07-01 08:30:00",
                "updated_at" => "2021-07-20 08:00:00"
            ],
            [
                "name" => "DND DC Mood Collection - 36 Colors *",
                "price" => "18",
                "price_discount" => "14",
                "description" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/moodcollection_900x.jpg?v=1594060905",
                "picture" => "",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 1,
                "created_at" => "2021-07-01 08:30:00",
                "updated_at" => "2021-07-20 08:00:00"
            ],
            [
                "name" => "DND DC Dip Full Collection*",
                "price" => "28",
                "price_discount" => "14",
                "description" => "144 màu nhúng, nhiều màu săc, bột trong tự nhiên",
                "picture" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/dc_dip_1080x.png?v=1579123379",
                "stock" => "20",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 1,
                "created_at" => "2021-07-02 08:30:00",
                "updated_at" => "2021-07-22 08:00:00"
            ],
            [
                "name" => "DND DC Gel Ink ",
                "price" => "30",
                "price_discount" => "28",
                "description" => "Bột đá cẩm thạch gel",
                "picture" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/fullink_1080x.jpg?v=1592332122",
                "stock" => "28",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 1,
                "created_at" => "2021-07-02 08:30:00",
                "updated_at" => "2021-07-22 08:00:00"
            ],
            [
                "name" => "Kiara Sky Essentials 6pack ",
                "price" => "20",
                "price_discount" => "18",
                "description" => "Trái phiếu 0.4oz, bảo vệ con dấu 0.4oz, dầu dưỡng, tiết kiệm bàn chải",
                "picture" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/bundle_d32d2cdb-67d3-4828-b880-24607633a70d_900x.jpg?v=1617808578",
                "stock" => "28",
                "amount" => "200",
                "unit" => "ml",
                "products_categories_id" => 1,
                "created_at" => "2021-07-02 08:30:00",
                "updated_at" => "2021-07-22 08:00:00"

            ],
            [
                "name" => "Kiara Sky #1 Bond Refill 2oz ",
                "price" => "20",
                "price_discount" => "18",
                "description" => "Lớp dính dễ dàng, giữ nguyên độ kín thít, bảo vệ móng, tiết kiệm bàn chải",
                "picture" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/bond_720x.jpg?v=1569288490",
                "stock" => "20",
                "amount" => "200",
                "unit" => "ml",
                "products_categories_id" => 1,
                "created_at" => "2021-07-02 08:30:00",
                "updated_at" => "2021-07-22 08:00:00"

            ],
            [
                "name" => "Kiara Sky #3 Seal Protect 0.5oz ",
                "price" => "22",
                "price_discount" => "20",
                "description" => "Làm cứng bột và đóng dấu tất cả các lớp sơn trước đó để móng có thể được khoan, mài và đánh bóng",
                "picture" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/DIP_SEAL_900x.png?v=1569316758",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 1,
                "created_at" => "2021-07-02 08:30:00",
                "updated_at" => "2021-07-22 08:00:00"

            ],
            [
                "name" => "Kiara Sky #4 Top 0.5oz",
                "price" => "22",
                "price_discount" => "20",
                "description" => "Tạo độ bóng và bảo vệ móng tay khỏi các tia có hại của mặt trời. Nó được pha chế đặc biệt để làm việc với bột nhúng.",
                "picture" => "https://cdn.shopify.com/s/files/1/0007/9744/2107/products/DIP_TOP_900x.png?v=1569316758",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 1,
                "created_at" => "2021-07-02 08:30:00",
                "updated_at" => "2021-07-22 08:00:00"

            ],
            [
                "name" => "Kìm lấy khóe",
                "price" => "22",
                "price_discount" => "20",
                "description" => "Bộ lấy khóe an toàn, đảm bảo vệ sinh.",
                "picture" => "https://scibeauty.edu.vn/wp-content/uploads/2020/06/dung-cu-nails.png",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 2,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Lấy lau gel",
                "price" => "8",
                "price_discount" => "4",
                "description" => "Vệ sinh về mặt móng trước khi sơn.",
                "picture" => "https://scibeauty.edu.vn/wp-content/uploads/2020/06/bo-dung-cu-nail-gom-nhung-gi.jpg",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 2,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Bông cotton",
                "price" => "3",
                "price_discount" => "0",
                "description" => "Vệ sinh về mặt móng trước khi sơn.",
                "picture" => "https://scibeauty.edu.vn/wp-content/uploads/2020/06/bo-dung-cu-nail-gom-nhung-gi.jpg",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 2,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Giấy Foil trang trí nail",
                "price" => "3",
                "price_discount" => "0",
                "description" => "Giấy Foils được sử dụng sau lớp sơn nền.",
                "picture" => "https://scibeauty.edu.vn/wp-content/uploads/2020/06/dung-cu-lam-nail-tai-nha.png",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 2,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Bộ tráng gương",
                "price" => "2",
                "price_discount" => "0",
                "description" => "Để tạo ra độ bóng, làm cho bộ móng thêm bắt mắt.",
                "picture" => "https://scibeauty.edu.vn/wp-content/uploads/2020/06/bo-dung-cu-lam-nail.png",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 2,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Cọ vẽ móng",
                "price" => "4",
                "price_discount" => "0",
                "description" => "Vẽ, trang trí cho bộ móng.",
                "picture" => "https://scibeauty.edu.vn/wp-content/uploads/2020/06/dung-cu-lam-nail-gia-si-tphcm.png",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 2,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Dũa móng",
                "price" => "4",
                "price_discount" => "0",
                "description" => "Cắt tỉa cho bộ móng.",
                "picture" => "https://scibeauty.edu.vn/wp-content/uploads/2020/06/hoc-lam-mong-tay-.png",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 2,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả myyeah 1/288",
                "price" => "1",
                "price_discount" => "0",
                "description" => "Chiếc Đinh Chủ Đề Giáng Sinh Móng Giả Phủ Đầy Đủ Họa Tiết Hỗn Hợp Nối Dài Đầu Móng Tay Giả Acrylic, Pháp Công Cụ Làm Móng Tay",
                "picture" => "https://my-live-05.slatic.net/p/18f28b0795cdbab19ba1399b0887e668.jpg_720x720q80.jpg_.webp",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả myyeah 8/288",
                "price" => "4",
                "price_discount" => "0",
                "description" => "Hộp 24 móng tay giả họa tiết vẽ sẵn",
                "picture" => "https://vn-live-05.slatic.net/p/ee03a4b7e1799d85a66fe1f1f8f856ac.jpg_720x720q80.jpg_.webp",
                "stock" => "8",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả myyeah Gel UV",
                "price" => "7",
                "price_discount" => "0",
                "description" => "500 Cái Sơn Móng Tay Nghệ Thuật Gel UV Móng Tay Giả Hình Quan Tài Ba Lê Móng Tay Giả Bằng Acrylic Kiểu Pháp Phủ Toàn Bộ, Đầu Móng Tay Giả",
                "picture" => "https://my-live-05.slatic.net/p/mdc/e38546de45ed514dfa501959d3bc47b2.jpg_720x720q80.jpg_.webp",
                "stock" => "8",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả Nails",
                "price" => "3",
                "price_discount" => "0",
                "description" => "Móng tay gia giá rẻ -nail giả cao cấp mẫu mới về hộp 24 móng- Kinakino phukienlamdep",
                "picture" => "https://vn-live-05.slatic.net/p/8942c1a8e9661caf533e4bc430e8cd2d.jpg_720x720q80.jpg_.webp",
                "stock" => "0",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả họa tiết bò sữa",
                "price" => "38000",
                "price_discount" => "0",
                "description" => "Móng tay giả hoạ tiết bò sữa,nail hot năm nay",
                "picture" => "https://vn-live-05.slatic.net/p/42ff104be5ff9e9663aa1c647312ff95.jpg_720x720q80.jpg_.webp",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả Nails dài đơn",
                "price" => "28000",
                "price_discount" => "0",
                "description" => "Móng Giả - Nail Dài Đơn Màu Sơn Mịn - Form Hình Thang - BST JP1170",
                "picture" => "https://vn-live-05.slatic.net/p/cee6efaa433b5536f234ece9e103e382.jpg_720x720q80.jpg_.webp",
                "stock" => "0",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả B2",
                "price" => "28000",
                "price_discount" => "0",
                "description" => "B2 Móng tay giả thiết kế / Móng úo dán tay thiết kế",
                "picture" => "https://filebroker-cdn.lazada.vn/kf/Sf024b280b5044012a7cf32d29da50412z.jpg",
                "stock" => "10",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Móng giả đi biển",
                "price" => "28000",
                "price_discount" => "0",
                "description" => "Nailbox đi biển",
                "picture" => "https://vn-live-05.slatic.net/p/452ce4c9bcf29faf50cee548ff165d8e.jpg_720x720q80.jpg_.webp",
                "stock" => "4",
                "amount" => "80",
                "unit" => "gam",
                "products_categories_id" => 3,
                "created_at" => "2021-07-10 08:30:00",
                "updated_at" => "2021-08-22 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay 8Ml",
                "price" => "28000",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay 8Ml Sơn Móng Tay Không Thấm Nước Rách, Đèn LED Gel Đánh Bóng Bán Vĩnh Viễn Gel Sơn Móng Tay Nghệ Thuật Ngâm Nước UV Lấp Lánh",
                "picture" => "https://my-live-05.slatic.net/p/ae2506de00ae4c3bf127c89574f65018.jpg_720x720q80.jpg_.webp",
                "stock" => "4",
                "amount" => "80",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay SANIYE N8182 ",
                "price" => "48000",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay SANIYE N8182 Trong Suốt Có 2 Màu Tùy Chọn 6ml",
                "picture" => "https://vn-live-05.slatic.net/p/66b831e8a7f978a13adb3a4ffe5b480b.jpg_720x720q80.jpg_.webp",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay SANIYE N8189 ",
                "price" => "48000",
                "price_discount" => "0",
                "description" => "SANIYE Bộ 3 lọ sơn móng tay khối lượng tịnh 3g/lọ chất lượng cao không thấm nước nhanh khô và lâu trôi N8039 - intl",
                "picture" => "https://vn-live-05.slatic.net/p/998a1422fb9eca68d2c35ff08b22d96e.jpg_720x720q80.jpg_.webp",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay  Felina ",
                "price" => "48000",
                "price_discount" => "0",
                "description" => "Sơn móng tay Felina 18ml - Màu sắc đa dạng",
                "picture" => "https://vn-live-05.slatic.net/p/b68daf0c23de76fd561ea44cdde626fe.jpg_720x720q80.jpg_.webp",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay  Opi ",
                "price" => "78000",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay Opi (NLZ15)",
                "picture" => "https://vn-live-05.slatic.net/p/6ebbf80470a075b7471a05949fe0d627.jpg_720x720q80.jpg_.webp",
                "stock" => "8",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay Opi18 ",
                "price" => "78000",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay Opi (NLZ18)",
                "picture" => "https://vn-live-05.slatic.net/p/a8baf5907138434ced52889dbe13f894.jpg_720x720q80.jpg_.webp",
                "stock" => "8",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay Opi04 ",
                "price" => "78000",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay Opi (NLZ104)",
                "picture" => "https://vn-live-05.slatic.net/p/e840dac5f9880543e79867b2e0fb4c40.jpg_720x720q80.jpg_.webp",
                "stock" => "4",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],

            [
                "name" => "Sơn Móng Tay Opi03 ",
                "price" => "78000",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay Opi (NLZ103)",
                "picture" => "https://vn-live-05.slatic.net/p/c1e7214a7d7f1e1da4e20ae8e6fe92ba.jpg_720x720q80.jpg_.webp",
                "stock" => "0",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay Opi08 ",
                "price" => "78000",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay Opi (NLZ108)",
                "picture" => "https://vn-live-05.slatic.net/p/8489c313bc6f89fc22f11937f03ec1c3.jpg_720x720q80.jpg_.webp",
                "stock" => "0",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 4,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 043 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/fdc645c50023c957f1d4ee5856d6d09f",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 044 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/331861cc6085ba6cd5ec23e61f6d4c1a",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 048 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/3601f470949d15f9466a446e909e355f",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 047 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/5bc6a8fecb54e1c8ff44bde10202f6d5",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 010 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/a5025e06c99e42fd55b0f9b32853b3f7",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 014 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/c08c58860a5048a476b05f535f68a21e",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 042 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/871272f5b0585721190bde2592847016",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Hin Nail 040 ",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sét móng giả kèm keo Hin Nail 24 móng tay giả họa tiết độc đáo",
                "picture" => "https://cf.shopee.vn/file/56afa68eafe0c80fc41a26382a18919b",
                "stock" => "10",
                "amount" => "100",
                "unit" => "gam",
                "products_categories_id" => 5,
                "created_at" => "2021-08-20 08:30:00",
                "updated_at" => "2021-08-30 08:00:00"

            ],
            [
                "name" => "Kem dưỡng da tay innisfree Jeju",
                "price" => "7",
                "price_discount" => "0",
                "description" => "Kem dưỡng da tay hương nước hoa innisfree Jeju Life Perfumed Hand Cream 30ml",
                "picture" => "https://cf.shopee.vn/file/56afa68eafe0c80fc41a26382a18919b",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 6,
                "created_at" => "2021-04-20 08:30:00",
                "updated_at" => "2021-04-30 08:00:00"

            ],
            [
                "name" => "Kem dưỡng da tay innisfree Jeju",
                "price" => "7",
                "price_discount" => "0",
                "description" => "Kem dưỡng da tay hương nước hoa innisfree Jeju Life Perfumed Hand Cream 30ml",
                "picture" => "https://cf.shopee.vn/file/84822df9b95bfdd3f4b22a89b49a8304",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 6,
                "created_at" => "2021-04-20 08:30:00",
                "updated_at" => "2021-04-30 08:00:00"

            ],
            [
                "name" => "Sơn móng tay innisfree Real Color Nail 6ml [B]",
                "price" => "8",
                "price_discount" => "0",
                "description" => "Sơn móng tay innisfree Real Color Nail 6ml [B] đa dạng màu sắc",
                "picture" => "https://cf.shopee.vn/file/3a68daeb8b72575b49c0136d0b4fd2c8",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 6,
                "created_at" => "2021-04-20 08:30:00",
                "updated_at" => "2021-04-30 08:00:00"

            ],
            [
                "name" => "Sơn Móng Tay Innisfree Real Color Nail 225-231",
                "price" => "4",
                "price_discount" => "0",
                "description" => "Sơn Móng Tay Innisfree Real Color Nail 225-231 nhiều màu sắc bắt mắt",
                "picture" => "https://cf.shopee.vn/file/e371a9b035375391b180f5f77d1780eb",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 6,
                "created_at" => "2021-04-20 08:30:00",
                "updated_at" => "2021-04-30 08:00:00"

            ],
            [
                "name" => "Mặt nạ chân Innisfree Special Care Foot Mask 1pc",
                "price" => "4",
                "price_discount" => "0",
                "description" => "Mặt nạ chân Innisfree Special Care Foot Mask 1pc mát mẻ, thẩm thấu nhanh",
                "picture" => "https://cf.shopee.vn/file/9886070875e00a5ee951bf040ac6b7df",
                "stock" => "10",
                "amount" => "100",
                "unit" => "ml",
                "products_categories_id" => 6,
                "created_at" => "2021-04-20 08:30:00",
                "updated_at" => "2021-04-30 08:00:00"
            ]
        ];
        DB::table("products")->insert($products);

    }
}
