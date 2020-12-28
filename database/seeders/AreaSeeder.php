<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder
{
    public function run()
    {
        DB::table('areas')->insert([
            ['name' => 'products', 'label' => 'Productos'],
            ['name' => 'sales', 'label' => 'Ventas'],
            ['name' => 'suppliers', 'label' => 'Proveedores'],
            ['name' => 'supplies', 'label' => 'Insumos'],
            ['name' => 'users', 'label' => 'Usuarios'],
        ]);
    }
}
