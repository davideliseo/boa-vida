<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            ProductSeeder::class,
            RoleSeeder::class,
            SaleSeeder::class,
            SupplierSeeder::class,
            SupplySeeder::class,
            UserSeeder::class,
        ]);
    }
}
