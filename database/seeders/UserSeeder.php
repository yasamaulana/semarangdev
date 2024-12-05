<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin Website',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'level' => 'admin'
        ]);

        User::create([
            'name' => 'Penulis Website',
            'email' => 'penulis@gmail.com',
            'password' => Hash::make('admin123'),
        ]);
    }
}