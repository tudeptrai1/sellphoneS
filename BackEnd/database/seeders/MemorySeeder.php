<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memories')->insert([
                ['id'=>1111,'value' => "32GB"],
                ['id'=>1112,'value' => "64GB"],
                ['id'=>1113,'value' => "128GB"],
                ['id'=>1114,'value' => "256GB"],
                ['id'=>1115,'value' => "512GB"],
                ['id'=>1116,'value' => "1TB"],
            ]
        );
    }
}
