<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_groups')->insert([
                ['id'=>5553,'name' => 'iPhone 14', 'brand_id'=>'553','description'=>'iPhone','trending'=>1],
                ['id'=>5554,'name' => 'iPhone 14 Pro Max', 'brand_id'=>'553','description'=>'iPhone','trending'=>1],
                ['id'=>5555,'name' => 'iPhone 14 Pro', 'brand_id'=>'553','description'=>'iPhone','trending'=>1],
                ['id'=>5556,'name' => 'iPhone 13 ', 'brand_id'=>'553','description'=>'iPhone','trending'=>1],
                ['id'=>5557,'name' => 'iPhone 13 Pro ', 'brand_id'=>'553','description'=>'iPhone','trending'=>1],
                ['id'=>5558,'name' => 'iPhone 13 Pro Max','brand_id'=>'553','description'=>'iPhone','trending'=>1],
                ['id'=>5559,'name' => 'Samsung Galaxy S20+','brand_id'=>'554','description'=>'Samsung','trending'=>0],
                ['id'=>5560,'name' => ' Samsung Galaxy Z Flip 4 5G','brand_id'=>'554','description'=>'Samsung','trending'=>1],
                ['id'=>5561,'name' => ' Samsung Galaxy A72 4G','brand_id'=>'554','description'=>'Samsung','trending'=>0],
                ['id'=>5562,'name' => 'Xiaomi Redmi 10 2022','brand_id'=>'555','description'=>'Xiaomi','trending'=>0],
                ['id'=>5563,'name' => 'Xiaomi Redmi Note 11 Pro','brand_id'=>'555','description'=>'Xiaomi','trending'=>0],
                ['id'=>5564,'name' => 'OPPO Reno8 Z 5G','brand_id'=>'556','description'=>'OPPO','trending'=>0],
                ['id'=>5565,'name' => 'OPPO A77s','brand_id'=>'556','description'=>'OPPO','trending'=>0],
                ['id'=>5566,'name' => 'OPPO A17','brand_id'=>'556','description'=>'OPPO','trending'=>0],

            ]
        );
    }
}
