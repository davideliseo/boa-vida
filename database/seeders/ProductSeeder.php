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
            'manufacturing_date' => new DateTime('25-12-2020'),
            'expiry_date' => new DateTime('25-03-2021'),
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
        DB::table('products')->insert([
            'name' => 'Pan massa madre',
            'quantity' => 5,
            'price' => 200,
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
        DB::table('products')->insert([
            'name' => 'Trufa',
            'quantity' => 15,
            'price' => 300,
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
    }
}
