<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discounts')->insert([
               ['id'=>2522,'type'=>1,'discount_value'=>'5','discount_code'=>'SPSD5','active'=>1,'created_at'=>'2022-06-20','valid_until'=>'2023-12-20','description'=>'Mã giảm 5% cho hóa đơn của khách hàng giảm tối đa 200k','max_discount_amount'=>'200000'],
                ['id'=>2523,'type'=>1,'discount_value'=>'10','discount_code'=>'SPSD10','active'=>1,'created_at'=>'2022-09-20','valid_until'=>'2023-12-20','description'=>'Mã giảm 10% cho hóa đơn của khách hàng giảm tối đa 400k','max_discount_amount'=>'400000'],
                ['id'=>2524,'type'=>0,'discount_value'=>'10','discount_code'=>'SP2011','active'=>1,'created_at'=>'2022-09-20','valid_until'=>'2023-12-20','description'=>'Giảm giá 10% giá trị sản phẩm (tối đa 500k) nhân ngày nhà giá Việt Nam 20/11','max_discount_amount'=>'500000'],
            ]
        );
    }
}
