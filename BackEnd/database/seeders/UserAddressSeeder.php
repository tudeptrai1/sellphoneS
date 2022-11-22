<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['user_id'=>'1','receive_name'=>'John Stone','address'=>'45/9 Đào Duy Anh, phường 9, quận Phú Nhuận, Hồ Chí Minh ','city'=>'Hồ Chí Minh','phone'=>'+84355390151'],
            ['user_id'=>'2','receive_name'=>'Phạm Hữu Duyên ','address'=>'151 Nguyễn Kim, phường 3, quận 10, Hồ Chí Minh ','city'=>'Hồ Chí Minh','phone'=>'+84355390151'],
            ['user_id'=>'3','receive_name'=>'Phan Anh','address'=>'1551 Sông Bồ, thị trấn Tứ Hạ, thị xã Hương Trà, Thừa Thiên Huế ','city'=>'Thừa Thiên Huế','phone'=>'+84355390151'],

        ]);
    }
}
