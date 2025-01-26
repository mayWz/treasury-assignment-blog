<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->withPersonalTeam()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'password' => Hash::make('test@231!'),
            'email' => 'test@test.com',
        ]);
    }
}
