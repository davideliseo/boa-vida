<?php

namespace Database\Seeders;

use DateTime;
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
            'name' => 'Extracto de vainilla',
            'quantity' => 10,
            'price' => 200,
            'expiry_date' => new DateTime('12-01-2021'),
            'purchase_date' => new DateTime('today'),
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
    }
}
