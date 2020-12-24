<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'amount' => 900,
            'status' => 'completed',
            'client_name' => 'Alexis Sánchez',
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
    }
}
