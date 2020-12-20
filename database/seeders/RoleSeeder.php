<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin'],
            ['name' => 'products'],
            ['name' => 'supplies'],
            ['name' => 'sales'],
            ['name' => 'suppliers'],
            ['name' => 'users'],
        ]);
    }
}
