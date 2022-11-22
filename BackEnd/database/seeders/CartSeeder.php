<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
                ['id' => 9991, 'user_id' => 1, 'product_id' => 21095, 'amount' => 3],
                ['id' => 9992, 'user_id' => 1, 'product_id' => 21096, 'amount' => 1],
                ['id' => 9993, 'user_id' => 1, 'product_id' => 21097, 'amount' => 1],
                ['id' => 9994, 'user_id' => 1, 'product_id' => 21098, 'amount' => 1],
            ]

        );
    }
}
