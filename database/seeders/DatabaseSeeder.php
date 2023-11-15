<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Nisa Rianti',
            'email' => 'admin@example.com',
            'password' => Hash::make('secret'),
            'about' => "Hi, I’m Nisa, Decisions: i'm crazy.",
        ]);
    }
}
