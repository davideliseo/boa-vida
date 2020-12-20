<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Permissions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'test@test.com',
            'password' => Hash::make(12341234),
        ]);

        DB::table('users')->insert([
            'name' => 'Encargado de recursos humanos',
            'email' => 'test2@test.com',
            'password' => Hash::make(12341234),
        ]);

        DB::table('users')->insert([
            'name' => 'Encargado de producción',
            'email' => 'test3@test.com',
            'password' => Hash::make(12341234),
        ]);

        $user = User::find(1);
        $user->roles()->sync([
            1 => ['permissions' => Permissions::$all],
            3 => ['permissions' => Permissions::$all]
        ]);

        $user = User::find(2);
        $user->roles()->sync([
            6 => ['permissions' => Permissions::$all]
        ]);

        $user = User::find(3);
        $user->roles()->sync([
            2 => ['permissions' => Permissions::$all]
        ]);
    }
}
