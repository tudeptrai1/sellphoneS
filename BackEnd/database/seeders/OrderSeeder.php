<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
                ['id'=>111545,'user_id'=>1, 'payment_method'=>'Cash in Delivery','payment_id'=>'TRANS15648124ZaD','ordered_date'=>'2021-11-22 19:25:22','status'=>'Completed'],
                ['id'=>111546,'user_id'=>2, 'payment_method'=>'Paid in PayPal','payment_id'=>'PAYPAL15481aD','ordered_date'=>'2020-11-22 19:25:22','status'=>'Canceled'],
                ['id'=>111547,'user_id'=>3, 'payment_method'=>'Cash in Delivery','payment_id'=>'TRANS15648126ZaD','ordered_date'=>'2022-11-20 19:25:22','status'=>'Waiting for Confirm'],
                ['id'=>111548,'user_id'=>4, 'payment_method'=>'Cash in Delivery','payment_id'=>'TRANS15648127ZaD','ordered_date'=>'2019-11-22 19:25:22','status'=>'Completed'],
            ]
        );
    }
}
