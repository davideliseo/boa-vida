<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            'name' => 'Proveedor 1',
            'rut' => '12.511.207-2',
            'email' => 'contacto@proveedor.com',
            'address' => 'Av. Central 7896, PAC, RM',
            'phone_number' => '+569 9876 4321',
            'created_at' => new DateTime("now"),
            'updated_at' => new DateTime("now"),
        ]);
    }
}
