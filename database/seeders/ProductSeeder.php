<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Palillos tipo grisín',
            'quantity' => 10,
            'price' => 500,
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
    }
}
