<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Statistical extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('statistical')->insert([
                'order_date' =>  new \Datetime(),
                'sales' => rand(0, 8),
                'profit' => rand(0, 7),
                'quantity' => rand(0, 2),
                'total_order' => rand(0, 2),
            ]);
        }
    }
}
