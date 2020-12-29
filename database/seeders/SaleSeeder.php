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
            'amount' => 9000,
            'status' => 'completed',
            'type' => 'receipt',
            'date' => new DateTime("today"),
            'client_name' => 'Cliente 1',
            'client_phone_number' => '+569 9876 4321',
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
    }
}
