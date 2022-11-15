<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
                ['id'=>111,'name' => 'Vàng', 'value'=>'f3ca20'],
                ['id'=>112,'name' => 'Xám', 'value'=>'bbbbbb'],
                ['id'=>113,'name' => 'Đen', 'value'=>'000000'],
                ['id'=>114,'name' => 'Xanh lá', 'value'=>'3a6b35'],
                ['id'=>115,'name' => 'Tím', 'value'=>'500472'],
                ['id'=>116,'name' => 'Đỏ', 'value'=>'d71b3b'],
         ]
        );
    }
}
