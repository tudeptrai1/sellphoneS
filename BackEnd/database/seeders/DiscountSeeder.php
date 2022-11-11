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
               ['id'=>'2522','discount_value'=>'5','discount_code'=>'SPSD5'.strtoupper(Str::random(5)),'active'=>1,'created_at'=>'2022-06-20','valid_until'=>'2023-12-20','description'=>'Mã giảm 5% cho hóa đơn của khách hàng giảm tối đa 200k','max_discount_amount'=>'200000'],
                ['id'=>'2523','discount_value'=>'10','discount_code'=>'SPSD10'.strtoupper(Str::random(5)),'active'=>1,'created_at'=>'2022-09-20','valid_until'=>'2023-12-20','description'=>'Mã giảm 10% cho hóa đơn của khách hàng giảm tối đa 400k','max_discount_amount'=>'400000'],
             ]
        );
    }
}
