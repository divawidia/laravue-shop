<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'admin@test.com',
            'name' => 'Admin',
            'password' => Hash::make('admin123'),
            'isAdmin' => true,
        ]);
    }
}
