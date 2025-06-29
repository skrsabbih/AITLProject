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
        {
        User::create([
            'name' => 'KDH00001',
            'email' => 'KDH00001@example.com',
            'password' => Hash::make('123456'),
        ]);

        User::create([
            'name' => 'KDH00002',
            'email' => 'KDH00002@example.com',
            'password' => Hash::make('123456'),
        ]);
    }
    }
}
