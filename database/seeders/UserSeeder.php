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
       User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_role' => 1,
            'status' => 1,
            'password' => Hash::make('123456789')
       ]);
    }
}
