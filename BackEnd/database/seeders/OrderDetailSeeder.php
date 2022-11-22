<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([
                ['id'=>1454,'order_id'=>'111545','product_id'=>'21095','quantity'=>'5'],
                ['id'=>1455,'order_id'=>'111545','product_id'=>'21096','quantity'=>'4'],
                ['id'=>1456,'order_id'=>'111546','product_id'=>'21095','quantity'=>'1'],
                ['id'=>1457,'order_id'=>'111547','product_id'=>'21098','quantity'=>'2'],
                ['id'=>1458,'order_id'=>'111548','product_id'=>'21099','quantity'=>'1'],
            ]
        );
    }
}
