<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
                ['id'=>553,'name' => 'iPhone','slug'=>'iphone', 'description' => "iPhone là thương hiệu của Apple nổi tiếng của Mỹ, với cấu hình mạnh mẽ, thiết kế thời trang, màn hình Retina độc quyền, hệ thống camera cực nét,... được nhiều khách hàng yêu thích.",'status'=>'on'],
                ['id'=>554,'name' => 'SamSung','slug'=>'samsung',  'description' => "Samsung có lẽ là một trong những thương hiệu điện thoại duy nhất vẫn còn đang cố gắng tìm kiếm sự những mới mẻ trong thiết kế sản phẩm di động của mình.",'status'=>'on'],
                ['id'=>555,'name' => 'Xiaomi', 'slug'=>'xiaomi', 'description' => "Tuy là một thương hiệu xuất xứ từ Trung Quốc nhưng chất lượng của các sản phẩm đến từ hãng điện tử này đã có những sự cải thiện tích cực qua từng năm và đã đạt những những thành công vang dội tại các thị trường khó tính như Mỹ và hay một số nước Châu Âu.",'status'=>'on'],
                ['id'=>556,'name' => 'OPPO', 'slug'=>'oppo', 'description' => "OPPO luôn mong muốn cung cấp cho khách hàng những trải nghiệm tốt nhất trên thiết bị di động thông qua thiết kế tinh tế, đẹp mắt và nhiều công nghệ thông minh",'status'=>'on'],
                ['id'=>557,'name' => 'Realme','slug'=>'realme',  'description' => "Điện thoại Realme là thương hiệu khá mới, gia nhập vào thị trường smartphone Việt Nam năm 2018. Nó nhanh chóng nhận được sự quan tâm, yêu thích từ đông đảo người dùng.",'status'=>'off'],
                ['id'=>558,'name' => 'Nokia','slug'=>'nokia',  'description' => "Các dòng điện thoại cổ điển của Nokia có thiết kế nhỏ gọn, chắc chắn, hình dáng tối ưu cho việc cầm nắm. Đây sẽ là lựa chọn rất đáng để cân nhắc nếu bạn cần mua một chiếc smartphone dễ sử dụng dành cho người lớn tuổi.",'status'=>'on'],
                ['id'=>559,'name' => 'Điện thoại phổ thông','slug'=>'normal',  'description' => 'Chưa biết viết gì','status'=>'on'],

            ]
        );
    }

}
