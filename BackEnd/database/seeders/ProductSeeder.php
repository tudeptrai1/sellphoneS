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

                ['id'=>21095,'name' => 'iPhone 14 Pro Max 128GB Đen','pg_id'=>5554,'color_id'=>113,'memory_id'=>1113,'imp_price'=>'27000000','sell_price'=>'32990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21096,'name' => 'iPhone 14 Pro Max 256GB Đen','pg_id'=>5554,'color_id'=>113,'memory_id'=>1114,'imp_price'=>'30000000','sell_price'=>'35990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21097,'name' => 'iPhone 14 Pro Max 512GB Đen','pg_id'=>5554,'color_id'=>113,'memory_id'=>1115,'imp_price'=>'36000000','sell_price'=>'42990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21098,'name' => 'iPhone 14 Pro Max 1TB Đen','pg_id'=>5554,'color_id'=>113,'memory_id'=>1116,'imp_price'=>'40000000','sell_price'=>'47990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21099,'name' => 'iPhone 14 Pro Max 128GB Vàng','pg_id'=>5554,'color_id'=>111,'memory_id'=>1113,'imp_price'=>'27000000','sell_price'=>'32990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21100,'name' => 'iPhone 14 Pro Max 256GB Vàng','pg_id'=>5554,'color_id'=>111,'memory_id'=>1114,'imp_price'=>'30000000','sell_price'=>'35990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21101,'name' => 'iPhone 14 Pro Max 512GB Vàng','pg_id'=>5554,'color_id'=>111,'memory_id'=>1115,'imp_price'=>'36000000','sell_price'=>'42990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21102,'name' => 'iPhone 14 Pro Max 1TB Vàng','pg_id'=>5554,'color_id'=>111,'memory_id'=>1116,'imp_price'=>'40000000','sell_price'=>'47990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21103,'name' => 'iPhone 14 Pro Max 128GB Tím','pg_id'=>5554,'color_id'=>115,'memory_id'=>1113,'imp_price'=>'27000000','sell_price'=>'27990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21104,'name' => 'iPhone 14 Pro Max 256GB Tím','pg_id'=>5554,'color_id'=>115,'memory_id'=>1114,'imp_price'=>'30000000','sell_price'=>'35990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21105,'name' => 'iPhone 14 Pro Max 512GB Tím','pg_id'=>5554,'color_id'=>115,'memory_id'=>1115,'imp_price'=>'36000000','sell_price'=>'42990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21106,'name' => 'iPhone 14 Pro Max 1TB Tím','pg_id'=>5554,'color_id'=>115,'memory_id'=>1116,'imp_price'=>'40000000','sell_price'=>'47990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],


                ['id'=>21107,'name' => 'iPhone 13 Pro 128GB Xanh lá','pg_id'=>5557,'color_id'=>114,'memory_id'=>1113,'imp_price'=>'20000000','sell_price'=>'25690000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21108,'name' => 'iPhone 13 Pro 256GB Xanh lá','pg_id'=>5557,'color_id'=>114,'memory_id'=>1114,'imp_price'=>'22000000','sell_price'=>'27790000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21109,'name' => 'iPhone 13 Pro 512GB Xanh lá','pg_id'=>5557,'color_id'=>114,'memory_id'=>1115,'imp_price'=>'24000000','sell_price'=>'28990000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21110,'name' => 'iPhone 13 Pro 1TB Xanh lá','pg_id'=>5557,'color_id'=>114,'memory_id'=>1116,'imp_price'=>'39000000','sell_price'=>'46990000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21111,'name' => 'iPhone 13 Pro 128GB Vàng','pg_id'=>5557,'color_id'=>111,'memory_id'=>1113,'imp_price'=>'20000000','sell_price'=>'27990000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21112,'name' => 'iPhone 13 Pro 256GB Vàng','pg_id'=>5557,'color_id'=>111,'memory_id'=>1114,'imp_price'=>'22000000','sell_price'=>'30290000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21113,'name' => 'iPhone 13 Pro 512GB Vàng','pg_id'=>5557,'color_id'=>111,'memory_id'=>1115,'imp_price'=>'24000000','sell_price'=>'41490000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21114,'name' => 'iPhone 13 Pro 1TB Vàng','pg_id'=>5557,'color_id'=>111,'memory_id'=>1116,'imp_price'=>'39000000','sell_price'=>'49990000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21115,'name' => 'iPhone 13 Pro 128GB Xám','pg_id'=>5557,'color_id'=>112,'memory_id'=>1113,'imp_price'=>'20000000','sell_price'=>'27990000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21116,'name' => 'iPhone 13 Pro 256GB Xám','pg_id'=>5557,'color_id'=>112,'memory_id'=>1114,'imp_price'=>'22000000','sell_price'=>'30290000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21117,'name' => 'iPhone 13 Pro 512GB Xám','pg_id'=>5557,'color_id'=>112,'memory_id'=>1115,'imp_price'=>'24000000','sell_price'=>'37490000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21118,'name' => 'iPhone 13 Pro 1TB Xám','pg_id'=>5557,'color_id'=>112,'memory_id'=>1116,'imp_price'=>'39000000','sell_price'=>'47990000','amount'=>25,'status'=>1,'created_at'=>now(),'discount_id'=>null],



                ['id'=>21119,'name' => 'iPhone 13 Pro Max 128GB Xanh lá','pg_id'=>5558,'color_id'=>114,'memory_id'=>1113,'imp_price'=>'22000000','sell_price'=>'27990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21120,'name' => 'iPhone 13 Pro Max 256GB Xanh lá','pg_id'=>5558,'color_id'=>114,'memory_id'=>1114,'imp_price'=>'24000000','sell_price'=>'30290000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21121,'name' => 'iPhone 13 Pro Max 512GB Xanh lá','pg_id'=>5558,'color_id'=>114,'memory_id'=>1115,'imp_price'=>'35000000','sell_price'=>'41490000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21122,'name' => 'iPhone 13 Pro Max 1TB Xanh lá','pg_id'=>5558,'color_id'=>114,'memory_id'=>1116,'imp_price'=>'44000000','sell_price'=>'49990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21123,'name' => 'iPhone 13 Pro Max 128GB Vàng','pg_id'=>5558,'color_id'=>111,'memory_id'=>1113,'imp_price'=>'22000000','sell_price'=>'27990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21124,'name' => 'iPhone 13 Pro Max 256GB Vàng','pg_id'=>5558,'color_id'=>111,'memory_id'=>1114,'imp_price'=>'24000000','sell_price'=>'30290000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21125,'name' => 'iPhone 13 Pro Max 512GB Vàng','pg_id'=>5558,'color_id'=>111,'memory_id'=>1115,'imp_price'=>'35000000','sell_price'=>'41490000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21126,'name' => 'iPhone 13 Pro Max 1TB Vàng','pg_id'=>5558,'color_id'=>111,'memory_id'=>1116,'imp_price'=>'44000000','sell_price'=>'49990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21147,'name' => 'iPhone 13 Pro Max 128GB Xám','pg_id'=>5558,'color_id'=>112,'memory_id'=>1113,'imp_price'=>'22000000','sell_price'=>'27990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21148,'name' => 'iPhone 13 Pro Max 256GB Xám','pg_id'=>5558,'color_id'=>112,'memory_id'=>1114,'imp_price'=>'24000000','sell_price'=>'30290000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21149,'name' => 'iPhone 13 Pro Max 512GB Xám','pg_id'=>5558,'color_id'=>112,'memory_id'=>1115,'imp_price'=>'35000000','sell_price'=>'37490000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21150,'name' => 'iPhone 13 Pro Max 1TB Xám','pg_id'=>5558,'color_id'=>112,'memory_id'=>1116,'imp_price'=>'44000000','sell_price'=>'47990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21127,'name'=>'Samsung Galaxy S20+ 128GB Xanh dương','pg_id'=>5559,'color_id'=>117,'memory_id'=>1113,'imp_price'=>'12000000','sell_price'=>'23990000','amount'=>50,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21128,'name'=>'Samsung Galaxy Z Flip 4 5G 128GB Xám','pg_id'=>5560,'color_id'=>112,'memory_id'=>1113,'imp_price'=>'10000000','sell_price'=>'19990000','amount'=>50,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21129,'name'=>'Samsung Galaxy Z Flip 4 5G 256GB Xám','pg_id'=>5560,'color_id'=>112,'memory_id'=>1114,'imp_price'=>'12000000','sell_price'=>'21990000','amount'=>40,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21130,'name'=>'Samsung Galaxy Z Flip 4 5G 128GB Vàng','pg_id'=>5560,'color_id'=>111,'memory_id'=>1113,'imp_price'=>'10000000','sell_price'=>'19990000','amount'=>30,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21131,'name'=>'Samsung Galaxy Z Flip 4 5G 256GB Vàng','pg_id'=>5560,'color_id'=>111,'memory_id'=>1114,'imp_price'=>'12000000','sell_price'=>'21990000','amount'=>10,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21132,'name'=>'Samsung Galaxy Z Flip 4 5G 128GB Tím','pg_id'=>5560,'color_id'=>115,'memory_id'=>1113,'imp_price'=>'10000000','sell_price'=>'19990000','amount'=>20,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21133,'name'=>'Samsung Galaxy Z Flip 4 5G 256GB Tím','pg_id'=>5560,'color_id'=>115,'memory_id'=>1114,'imp_price'=>'12000000','sell_price'=>'21990000','amount'=>50,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21134,'name'=>'Samsung Galaxy A72 4G 128GB Tím','pg_id'=>5561,'color_id'=>115,'memory_id'=>1113,'imp_price'=>'8000000','sell_price'=>'17990000','amount'=>55,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21135,'name'=>'Samsung Galaxy A72 4G 256GB Tím','pg_id'=>5561,'color_id'=>115,'memory_id'=>1114,'imp_price'=>'10000000','sell_price'=>'19990000','amount'=>50,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21136,'name'=>'Xiaomi Redmi 10 2022 128GB Xanh dương','pg_id'=>5562,'color_id'=>117,'memory_id'=>1113,'imp_price'=>'1500000','sell_price'=>'3950000','amount'=>5,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21138,'name'=>'Xiaomi Redmi 10 2022 128GB Xám','pg_id'=>5562,'color_id'=>112,'memory_id'=>1113,'imp_price'=>'1500000','sell_price'=>'3950000','amount'=>10,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21139,'name'=>'Xiaomi Redmi Note 11 Pro 128GB Xám','pg_id'=>5563,'color_id'=>112,'memory_id'=>1113,'imp_price'=>'4000000','sell_price'=>'6790000','amount'=>10,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21140,'name'=>'Xiaomi Redmi Note 11 Pro 128GB Xanh dương','pg_id'=>5563,'color_id'=>117,'memory_id'=>1113,'imp_price'=>'4000000','sell_price'=>'6790000','amount'=>10,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21141,'name'=>'OPPO Reno8 Z 5G 256GB Đen','pg_id'=>5564,'color_id'=>113,'memory_id'=>1114,'imp_price'=>'4000000','sell_price'=>'6790000','amount'=>15,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21142,'name'=>'OPPO Reno8 Z 5G 256GB Vàng','pg_id'=>5564,'color_id'=>111,'memory_id'=>1114,'imp_price'=>'7000000','sell_price'=>'9490000','amount'=>20,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21143,'name'=>'OPPO A77s 128GB Đen','pg_id'=>5565,'color_id'=>113,'memory_id'=>1113,'imp_price'=>'3500000','sell_price'=>'5790000','amount'=>20,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21144,'name'=>'OPPO A77s 128GB Xanh','pg_id'=>5565,'color_id'=>117,'memory_id'=>1113,'imp_price'=>'3500000','sell_price'=>'5790000','amount'=>11,'status'=>1,'created_at'=>now(),'discount_id'=>null],

                ['id'=>21145,'name'=>'OPPO A17 64GB Đen','pg_id'=>5566,'color_id'=>113,'memory_id'=>1112,'imp_price'=>'2000000','sell_price'=>'3650000','amount'=>15,'status'=>1,'created_at'=>now(),'discount_id'=>null],
                ['id'=>21146,'name'=>'OPPO A17 64GB Xanh','pg_id'=>5566,'color_id'=>117,'memory_id'=>1112,'imp_price'=>'2000000','sell_price'=>'3650000','amount'=>11,'status'=>1,'created_at'=>now(),'discount_id'=>null],

            ]
        );
    }
}
