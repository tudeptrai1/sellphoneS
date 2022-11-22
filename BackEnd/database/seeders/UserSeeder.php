<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                ['id' => 1, 'name' => 'Vy', 'email' => 'vy@gmail.com', 'password' => '$2y$10$CVtmh671jlC82L.DUrVYKuIvSj40zukID7qh.l55a2erF5YpWvEpe'],
                ['id' => 2, 'name' => 'Tú', 'email' => 'HuyenLinhNhanNganTruyenQuyen@gmail.com', 'password' => '$2y$10$CVtmh671jlC82L.DUrVYKuIvSj40zukID7qh.l55a2erF5YpWvEpe'],
                ['id' => 3, 'name' => 'Hoàng', 'email' => 'QuynhDuyen@gmail.com', 'password' => '$2y$10$CVtmh671jlC82L.DUrVYKuIvSj40zukID7qh.l55a2erF5YpWvEpe'],
                ['id' => 4, 'name' => 'Bot', 'email' => 'bot@gmail.com', 'password' => '$2y$10$CVtmh671jlC82L.DUrVYKuIvSj40zukID7qh.l55a2erF5YpWvEpe'],
            ]

        );
    }
}
