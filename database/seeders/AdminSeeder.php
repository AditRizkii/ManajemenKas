<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Nisa Rianti',
            'email' => 'admin@example.com',
            'npm' => '2208107010000',
            'password' => Hash::make('secret'),
            'about' => "Hi, I’m Nisa, Decisions: i'm crazy.",
        ])->assignRole('admin');
    }
}
