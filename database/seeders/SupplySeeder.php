<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('supplies')->insert([
            'name' => 'Huevo',
            'quantity' => 10,
            'price' => 100,
        ]);
    }
}
