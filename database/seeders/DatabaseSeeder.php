<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call([
            AreaSeeder::class,
            ProductSeeder::class,
            SaleSeeder::class,
            SupplierSeeder::class,
            SupplySeeder::class,
            StatusSeeder::class,
            UserSeeder::class,
        ]);
    }
}
