<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title' => 'Apple iPhone X 64GB Chính hãng',
                'categoryId' => 1,
                'description' => 'iPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.',
                'thumbnail' => 'https://cdn1.tgdd.vn/Products/Images/42/114111/iphone-x-256gb-20-400x400.jpg',
                'price' => 29990000 ,

            ], [
                'title' => 'iPhone 8 Plus Red 256GB (Đỏ)',
                'categoryId' => 1,
                'description' => 'iPhone 8 Plus đỏ bản 256GB là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đỏ đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến cũng như màu sắc nổi bật, cá tính.
Thiết kế quen thuộc
Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước',
                'thumbnail' => 'https://cdn1.tgdd.vn/Products/Images/42/164236/iphone-8-plus-do-256gb-400x400.jpg',
                'price' => 28950000,



            ], [
                'title' => 'iPhone 8 Plus 256GB',
                'categoryId' => 1,
                'description' => 'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.
                Thiết kế quen thuộc
                Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.',
                'thumbnail' => 'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg',
                'price' => 27950000,



            ], [
                'title' => 'Samsung Galaxy S9+ 128GB',
                'categoryId' => 1,
                'description' => 'Samsung Galaxy S9 Plus 128GB, siêu phẩm smartphone hàng đầu trong thế giới Android đã ra mắt với màn hình vô cực, camera chuyên nghiệp như máy ảnh và hàng loạt những tính năng cao cấp đầy hấp dẫn.',
                'thumbnail' => 'https://cdn.tgdd.vn/Products/Images/42/154695/samsung-galaxy-s9-plus-128gb-400x400.jpg',
                'price' => 24490000,


            ],[
                'title' => 'Apple iPhone 8 Plus 64GB',
                'categoryId' => 1,
                'description' => 'iPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.
Thiết kế quen thuộc
Về ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.',
                'thumbnail' => 'https://cdn4.tgdd.vn/Products/Images/42/114114/iphone-8-plus-256gb-hh-400x400.jpg',
                'price' => 24490000,

            ],[
                'title' => 'Samsung Galaxy A6',
                'categoryId' => 1,
                'description' => 'Sau sự ra mắt của bộ đôi Samsung Galaxy A8, A8 Plus, hãng điện thoại Samsung  tiếp tục cho ra mắt sản phẩm mới thuộc phân khúc tầm trung. Sản phẩm giữ nguyên thiết kế của dòng Galaxy A và tính năng giống với A8, Samsung A6 hứa hẹn sẽ được nhiều người hài lòng và sử dụng nhiều nhất trong các dòng Samsung Galaxy.',
                'thumbnail' => 'https://ptelemoveis.pt/5694-large_default/samsung-galaxy-a600-a6-2018-32gb3gb-dual-sim-lavender.jpg',
                'price' => 6990000,

            ],[
                'title' => 'Xiaomi Redmi S2 32GB',
                'categoryId' => 1,
                'description' => 'Xiaomi Redmi S2 – một chiếc điện thoại thuộc phân khúc giá rẻ khác của Xiaomi đã bắt đầu rò rỉ rất nhiều thông tin từ thiết kế cho đến cấu hình phần cứng.',
                'thumbnail' => 'https://cdn.fptshop.com.vn/Uploads/Originals/2018/5/19/636623236912499129_xiaomi-s2-3-xam.jpg',
                'price' => 3990000,

            ],[
                'title' => 'Oppo A71 32GB (2018)',
                'categoryId' => 1,
                'description' => 'Phiên bản OPPO A71 (2018) bản 32 GB ra mắt với vi xử lý Snapdragon 450 mạnh mẽ hơn, chụp ảnh selfie làm đẹp bằng AI thông minh và giá rẻ hơn.',
                'thumbnail' => 'http://dienmaythienhoa.vn/images/thumbnails/55/315/315/Untitled-1150546302359bb8aefe6d27.jpg',
                'price' => 24490000,

            ],[
                'title' => 'Asus Zenfone Max Plus M1',
                'categoryId' => 1,
                'description' => 'Zenfone Max Plus M1 là chiếc smartphone theo xu thế màn hình viền mỏng đầu tiên của ASUS. Với ưu điểm thiết kế đẹp, pin lớn truyền thống dòng Zenfone Max, camera kép và mức giá tầm trung cực kì hấp dẫn và đáng sở hữu.',
                'thumbnail' => 'http://product.hstatic.net/1000221014/product/5uevi1wjjbacwsay_setting_fff_1_90_end_500.png',
                'price' => 4490000,

            ],[
                'title' => ' Laptop Dell Inspiron 14 3467 C4I51107 14 inches Đen + Chuột Zadez M364 ',
                'categoryId' => 2,
                'description' => '',
                'thumbnail' => 'https://media.static-adayroi.com/240_240/80/h16/ha5/9547043667998.jpg',
                'price' => 24490000,

            ],[
                'title' => 'Laptop Dell Inspiron 14 3467 M20NR2 14 inches Đen',
                'categoryId' => 2,
                'description' => '',
                'thumbnail' => 'https://media.static-adayroi.com/240_240/80/h59/h2b/13305864847390.jpg',
                'price' => 15990000,

            ],[
                'title' => 'Laptop Dell Inspiron 3559 ',
                'categoryId' => 2,
                'description' => 'i5 6200U 4G 500G VGA R5 M315 2G Màn 15.6 inches Đen (Hàng nhập khẩu) - Tặng túi xách laptop',
                'thumbnail' => 'https://media.static-adayroi.com/240_240/80/h62/h80/13570800255006.jpg',
                'price' => 14490000,

            ],[
                'title' => 'PC Dell Vostro 3670 MTG5400 Pentium G5400/4G/1TB',
                'categoryId' => 3,
                'description' => 'Sức mạnh xử lý: Đảm đương khối lượng công việc của bạn một cách nhanh chóng và hiệu quả với bộ vi xử lý Pentium® G5400 thế hệ thứ 8 và bộ nhớ lên đến 4GB DDR4. 
                Mở rộng dễ dàng: 1TB dung lượng lưu trữ HDD để dễ dàng truy cập tất cả các tệp, ảnh và video bạn cần.',
                'thumbnail' => 'https://hanoicomputercdn.com/media/product/250_42688_desktop_vostro_3670_5.jpg',
                'price' => 7699000,
            ],[
                'title' => 'PC Dell Inspiron 3670 MTI31410 i3 8100/4G/1TB',
                'categoryId' => 3,
                'description' => 'Bộ vi xử lý mạnh mẽ: Được xây dựng với bộ vi xử lý Intel® Core i3-8100 thế hệ thứ 8, bạn có thể mong đợi một trải nghiệm PC đáng tin cậy đã được chứng minh. 
                Lưu trữ cao cấp: Dung lượng 1TB HDD bên trong ổ cứng của PC. Bạn cũng có thể chọn thêm ổ đĩa nữa cho nhiều không gian để sao lưu. 
                Tăng cường hiệu suất : Đáp ứng nhu cầu của bạn với thời gian làm việc nhanh hơn, tốc độ truyền tải cao hơn và tiêu thụ ít năng lượng hơn, tất cả đều nhờ vào hiệu suất của RAM DDR4 / 2400 và dung lượng 4GB.',
                'thumbnail' => 'https://hanoicomputercdn.com/media/product/250_42679_desktop_inspiron_3670mt_001.jpg',
                'price' => 8899000,
            ],[
                'title' => 'Workstation Dell T3620 E3-1225V5/8Gb (2*4Gb)/1TB/VGA K620 2Gb/DVDRW/Key/Mouse/70077952',
                'categoryId' => 3,
                'description' => 'Máy trạm Dell Precision T3620 (70077952) - Tower 
                Bộ vi xử lý:Xeon E3-1225v5(3.30 GHz,8MB) 
                Ram: 8GB DDR4 (2x4G) 
                HDD: 1TB 
                Card xử lý đồ họa: 2GB Nvidia Quadro K620',
                'thumbnail' => 'https://hanoicomputercdn.com/media/product/250_41754_pcws015_01.jpg',
                'price' => 22499000,
            ],[
                'title' => 'PC HNC MINI GAMING - ESPORT G2 G5500/8G/SSD120G/GTX1050Ti',
                'categoryId' => 3,
                'description' => 'PC HNC Mini phiên bản 2018 với nhiều cải tiến. Sử dụng thế hệ CPU Coffee Lake mới nhất đến từ Intel và đặc biệt được trang bị sẵn SSD mang lại tốc độ vượt trội 
                CPU Intel Pentium Gold G5500 3.8Ghz / 4MB / Sk 1151 (Coffee Lake) 
                Mainboard ASUS PRIME H310M-E 
                RAM DDR4 ANTECMEMORY 8GB - Bus 2400Mhz 
                Vga MSI GTX 1050Ti 4GB OCV1 
                SSD Colorful SL300 120GB - 3D NAND 
                Nguồn FSP AX400 - Active PFC 
                Case mini Jonsbo C2 - chất liệu Aluminum cao cấp',
                'thumbnail' => 'https://hanoicomputercdn.com/media/product/250_42319_pc_gaming_esport_final_1.png',
                'price' => 13099000,
            ],[
                'title' => 'Playstation 4 Slim 500GB Days of Play Limited Edition',
                'categoryId' => 4,
                'description' => 'Gọn hơn, mỏng hơn, các cạnh bo tròn, toàn bộ thân máy nhựa nhám matte chống bám vân tay, các nút và cổng kết nối bố trí hợp lý hơn, loại bỏ cổng quang optical, có nắp mở thay ổ cứng,... là một vài điểm thay đổi mạnh mẽ về mặt thiết kế của Playstation 4 Slim so với bản cũ.',
                'thumbnail' => 'http://haloshop.vn/image/cache/data/may-game/sony-playstation/ps4-slim-days-of-play-00-250x250.jpg',
                'price' => 8990000,
            ],[
                'title' => 'Playstation 4 Slim 1TB - Call of Duty World War II Bundle',
                'categoryId' => 4,
                'description' => 'Gọn hơn, mỏng hơn, các cạnh bo tròn, toàn bộ thân máy nhựa nhám matte chống bám vân tay, các nút và cổng kết nối bố trí hợp lý hơn, loại bỏ cổng quang optical, có nắp mở thay ổ cứng,... là một vài điểm thay đổi mạnh mẽ về mặt thiết kế của Playstation 4 Slim so với bản cũ.',
                'thumbnail' => 'http://haloshop.vn/image/cache/data/may-game/sony-playstation/ps4-slim-1tb-ww2-00-250x250.jpg',
                'price' => 7990000,
            ],[
                'title' => 'Playstation 4 Pro 1TB Chính Hãng',
                'categoryId' => 4,
                'description' => 'PS4 Pro thực sự làm cho các tựa game nhìn đẹp hơn nhờ sức mạnh phần cứng. Khả năng khử răng cưa (anti-aliasing) tốt hơn, hình ảnh trông sạch sẽ, màu sắc cũng chân thực hơn. Vậy bạn có nên mua PS4 Pro hay không? Dĩ nhiên là có nếu bạn sở hữu một chiếc TV 4K và đang muốn mua PS4. Giá một chiếc Playstation 4 Pro chỉ đắt hơn mẫu Slim 100 USD nhưng bạn sẽ có gấp đôi dung lượng ổ cứng (1TB), nhiều cổng kết nối, được hỗ trợ game tốt hơn trong tương lai và một số trò chơi nhìn cũng đẹp hơn ở 1080p.',
                'thumbnail' => 'http://haloshop.vn/image/cache/data/may-game/sony-playstation/ps4-pro-00-250x250.jpg',
                'price' => 14490000,
            ],[
                'title' => 'Nintendo Switch with Neon Blue and Neon Red Joy‑Con - HK',
                'categoryId' => 4,
                'description' => 'Nintendo Switch là tên gọi chính thức cho thế hệ máy chơi game tiếp theo của Nintendo. Một chiếc máy chơi game có thể gắn vào TV để dùng như một máy console và khi ra ngoài có thể mang theo để chơi trên một cái tablet cảm ứng cùng với bộ tay cầm không dây dạng module tháo ráp rất độc đáo.',
                'thumbnail' => 'http://haloshop.vn/image/cache/data/may-game/nintendo/nintendo-switch-neon-joy-con-44-250x250.jpg',
                'price' => 8190000,
            ],

        ]);
    }
}
