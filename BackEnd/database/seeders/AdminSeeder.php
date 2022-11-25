<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
                ['email' => 'admin@mail.com', 'password'=>bcrypt('123456'),'type'=>1],
                ['email' => 'admin2@mail.com', 'password'=>bcrypt('123'),'type'=>1],
                ['email' => 'ship@mail.com', 'password'=>bcrypt('123'),'type'=>2],
            ]
        );
    }
}
