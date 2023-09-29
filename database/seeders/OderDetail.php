<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OderDetail extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('order_details')->insert([
                'product_name' =>  rand(),
                'order_id' => '1',
                'product_id' => '42',
                'price' => rand(5),
                'created_at' => new \DateTime(),
            ]);
        }
    }
}
