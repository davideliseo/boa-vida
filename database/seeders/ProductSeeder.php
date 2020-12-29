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
            'unit_price' => 500,
            'wholesale_price' => 400,
            'manufacturing_date' => new DateTime('25-12-2020'),
            'expiry_date' => new DateTime('25-03-2021'),
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);

        DB::table('products')->insert([
            'name' => 'Pan massa madre',
            'quantity' => 5,
            'unit_price' => 200,
            'wholesale_price' => 100,
            'manufacturing_date' => new DateTime("today"),
            'expiry_date' => new DateTime("31-12-2020"),
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);

        DB::table('products')->insert([
            'name' => 'Trufa',
            'quantity' => 15,
            'unit_price' => 300,
            'wholesale_price' => 200,
            'manufacturing_date' => new DateTime("today"),
            'expiry_date' => new DateTime("12-01-2021"),
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
    }
}
