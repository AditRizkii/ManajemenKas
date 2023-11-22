<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => "Aulia Vika Rahman",
            'email' => 'auliavika87@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010001",
            'about' => "Hi, I’m Aulia Vika Rahman.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Mila Lestari",
            'email' => 'milamila90@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010002",
            'about' => "Hi, I’m Mila Lestari.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Alvia Zuhra",
            'email' => 'alviii123@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010003",
            'about' => "Hi, I’m Alvia Zuhra.",
        ])->assignRole('user');

        User::factory()->create([
            'name' => "Tiara Agustina",
            'email' => 'tiaraagustinaa556@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010004",
            'about' => "Hi, I’m Tiara Agustina.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Meutia Aini",
            'email' => 'meutiaaini445@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010005",
            'about' => "Hi, I’m Meutia Aini.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Nuri Masyithah",
            'email' => 'nurimasyithah446@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010006",
            'about' => "Hi, I’m Nuri Masyithah.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Sadinal Mufti",
            'email' => 'sadinalmuftih87@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010007",
            'about' => "Hi, I’m Sadinal Mufti.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Iffatun Nisa Nasrullah",
            'email' => 'iffatunnisa80@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010009",
            'about' => "Hi, I’m Iffatun Nisa Nasrullah.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Nazwa Salsabila",
            'email' => 'nazwasalsabila12@gmail.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010010",
            'about' => "Hi, I’m Nazwa Salsabila.",
        ])->assignRole('user');
        User::factory()->create([
            'name' => "Muhammad Nabil Maulana",
            'email' => 'nabilmaulana5@gmai.com',
            'password' => Hash::make('secret'),
            'npm' => "2208107010011",
            'about' => "Hi, I’m Muhammad Nabil Maulana.",
        ])->assignRole('user');
    }
}
