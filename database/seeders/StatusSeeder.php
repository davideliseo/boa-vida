<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    public function run()
    {
        DB::table('statuses')->insert([
            ['name' => 'completed', 'label' => 'Completada'],
            ['name' => 'pending', 'label' => 'Pendiente'],
            ['name' => 'failed', 'label' => 'Fallida'],
        ]);
    }
}
