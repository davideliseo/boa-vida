<?php

namespace Database\Seeders;

use App\Models\User;
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

        DB::table('users')->insert([
            'name' => 'Encargado de producción 2',
            'email' => 'test4@test.com',
            'password' => Hash::make(12341234),
        ]);

        $user = User::find(1);
        $user->areas()->sync([1, 2, 3, 4, 5]);

        $user = User::find(2);
        $user->areas()->sync([5]);

        $user = User::find(3);
        $user->areas()->sync([2]);

        $user = User::find(4);
        $user->areas()->sync([6]);
    }
}
