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
                ['id'=>1111,'value' => 32],
                ['id'=>1112,'value' => 64],
                ['id'=>1113,'value' => 128],
                ['id'=>1114,'value' => 256],
                ['id'=>1115,'value' => 512],


            ]
        );
    }
}
