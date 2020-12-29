<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        if (App::environment('production')) {
            $this->call([AreaSeeder::class]);
        } else {
            $this->call([
                AreaSeeder::class,
                ProductSeeder::class,
                SaleSeeder::class,
                SupplierSeeder::class,
                SupplySeeder::class,
                UserSeeder::class,
            ]);
        }
    }
}
