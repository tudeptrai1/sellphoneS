<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserAddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_addresses')->insert([
            ['user_id'  => 1, 'order_id' => 111545, 'receive_name' => 'Trần Hữu Hoàng', 'receive_phone' => '+84355390151',
             'province' => 'Thành phố Hồ Chí Minh', 'district' => 'Quận 11', 'ward' => 'Phường 11', 'detail' => '45/9 Đào Duy Anh'
            ],
            ['user_id'  => 2, 'order_id' => 111545, 'receive_name' => 'Phạm Hữu Duyên', 'receive_phone' => '+84355390151',
             'province' => 'Thành phố Hà Nội', 'district' => 'Quận Ba Đình', 'ward' => 'Phường Trúc Bạch', 'detail' => '151 Nguyễn Kim'
            ],
            ['user_id'  => 3, 'order_id' => 111545, 'receive_name' => 'Trần Thị Ngọc Truyền', 'receive_phone' => '+84355390151',
             'province' => 'Tỉnh Quãng Ngãi', 'district' => 'Huyện Bình Sơn', 'ward' => 'Xã Bình Thạnh', 'detail' => '246 Lê Lai'
            ],
            ['user_id'  => 4, 'order_id' => 111545, 'receive_name' => 'Phạm Thị Hiểu Ngân', 'receive_phone' => '+84355390151',
             'province' => 'Tỉnh Bình Định', 'district' => 'Huyện Tuy Phước', 'ward' => 'Xã Phước Hưng', 'detail' => '246 Lê Lợi'
            ],

        ]);
    }
}
