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
            ]
        );
    }
}
