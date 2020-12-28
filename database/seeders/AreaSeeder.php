<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    public function run()
    {
        DB::table('areas')->insert([
            ['value' => 'products', 'name' => 'Productos'],
            ['value' => 'sales', 'name' => 'Ventas'],
            ['value' => 'suppliers', 'name' => 'Proveedores'],
            ['value' => 'supplies', 'name' => 'Insumos'],
            ['value' => 'users', 'name' => 'Usuarios'],
        ]);
    }
}
