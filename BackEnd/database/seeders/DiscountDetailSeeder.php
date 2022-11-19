<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('discount_details')->insert([
                ['id' => 111, 'discount_id' => '2524', 'product_id' => '21095'],
                ['id' => 112, 'discount_id' => '2524', 'product_id' => '21096'],
                ['id' => 113, 'discount_id' => '2524', 'product_id' => '21097'],
                ['id' => 114, 'discount_id' => '2524', 'product_id' => '21098'],
                ['id' => 115, 'discount_id' => '2524', 'product_id' => '21099'],
                ['id' => 116, 'discount_id' => '2524', 'product_id' => '21100'],
            ]
        );
    }
}
