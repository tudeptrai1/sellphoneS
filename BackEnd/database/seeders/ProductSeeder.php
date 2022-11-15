<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
                ['id'=>21111,'name' => 'iPhone 14 Pro Max 256GB Vàng','pg_id'=>5554,'color_id'=>111,'memory_id'=>1114,'imp_price'=>30000000,'sell_price'=>45000000,'amount'=>500,'status'=>1,'created_at'=>now() ,'discount_id'=>null],
                ['id'=>21112,'name' => 'iPhone 14 Pro Max 256GB Xám','pg_id'=>5554,'color_id'=>112,'memory_id'=>1114,'imp_price'=>30000000,'sell_price'=>45000000,'amount'=>500,'status'=>1,'created_at'=>now() ,'discount_id'=>null],
                ['id'=>21113,'name' => 'iPhone 13 Pro 256GB Vàng','pg_id'=>5557,'color_id'=>111,'memory_id'=>1114,'imp_price'=>20000000,'sell_price'=>32000000,'amount'=>450,'status'=>1,'created_at'=>now() ,'discount_id'=>null],
                ['id'=>21114,'name' => 'iPhone 13 Pro 256GB Xám','pg_id'=>5557,'color_id'=>112,'memory_id'=>1114,'imp_price'=>20000000,'sell_price'=>32000000,'amount'=>450,'status'=>1,'created_at'=>now() ,'discount_id'=>null],
                ['id'=>21115,'name' => 'iPhone 13 Pro 128GB Xám','pg_id'=>5557,'color_id'=>112,'memory_id'=>1113,'imp_price'=>18000000,'sell_price'=>30000000,'amount'=>400,'status'=>1,'created_at'=>now() ,'discount_id'=>null],
                ['id'=>21116,'name' => 'iPhone 13 Pro 128GB Vàng','pg_id'=>5557,'color_id'=>111,'memory_id'=>1113,'imp_price'=>18000000,'sell_price'=>30000000,'amount'=>40,'status'=>1,'created_at'=>now() ,'discount_id'=>null],
                ['id'=>21117,'name' => 'iPhone 14 256GB Vàng','pg_id'=>5553,'color_id'=>111,'memory_id'=>1114,'imp_price'=>24000000,'sell_price'=>36000000,'amount'=>100,'status'=>1,'created_at'=>now() ,'discount_id'=>null],
                ['id'=>21118,'name' => 'iPhone 14 512GB Vàng','pg_id'=>5553,'color_id'=>111,'memory_id'=>1115,'imp_price'=>26000000,'sell_price'=>38000000,'amount'=>140,'status'=>1,'created_at'=>now() ,'discount_id'=>null],

            ]
        );
    }
}
