<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechSpecDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   for($i = 5553;$i <=5566;$i++){
        DB::table('tech_spec_details')->insert([
            ['tech_id'=>45554,'pg_id' => $i, 'value'=>'16.5 inch'],
            ['tech_id'=>45555,'pg_id' => $i, 'value'=>'16hz'],
            ['tech_id'=>45556,'pg_id' => $i, 'value'=>'i9'],
            ['tech_id'=>45557,'pg_id' => $i, 'value'=>'1050mA'],
            ['tech_id'=>45558,'pg_id' => $i, 'value'=>'500g'],
            ['tech_id'=>45559,'pg_id' => $i, 'value'=>'OLED'],



        ]);
    }
    }
}
