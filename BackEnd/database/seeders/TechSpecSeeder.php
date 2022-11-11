<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechSpecSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tech_specs')->insert([
           ['id'=>45554,'name'=>'Kích thước màn hình'],
           ['id'=>45555,'name'=>'Độ phân giải màn hình'],
           ['id'=>45556,'name'=>'Hệ điều hành'],
           ['id'=>45557,'name'=>'Pin'],
           ['id'=>45558,'name'=>'Trọng lượng'],
           ['id'=>45559,'name'=>'Công nghệ màn hình'],
           ['id'=>45560,'name'=>'Camera sau'],
           ['id'=>45561,'name'=>'Camera trước'],
           ['id'=>45562,'name'=>'Chipset'],
           ['id'=>45563,'name'=>'Bộ nhớ trong'],
           ['id'=>45564,'name'=>'Tần số quét'],
           ['id'=>45565,'name'=>'Chỉ số kháng nước và bụi'],
           ['id'=>45566,'name'=>'Cổng sạc'],
        ]);
    }
}
