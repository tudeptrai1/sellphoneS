<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\TechSpecDetail;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            BrandSeeder::class,
            TechSpecSeeder::class,
            DiscountSeeder::class,
            ProductGroupSeeder::class,
            ColorSeeder::class,
            MemorySeeder::class,
            ProductSeeder::class,
            ImageSeeder::class,
            DiscountDetailSeeder::class,
            TechSpecDetailSeeder::class,
            CartSeeder::class,

        ]);
    }
}
