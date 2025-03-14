<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'apellido' => 'Sistema',
            'telefono' => '123456789',
            'email' => 'admin@ejemplo.com',
            'password' => Hash::make('password123'),
            'rol' => 'admin',
        ]);
    }
}
