<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Fulano da Silva',
            'email' => 'fulano@exemploemail.com',
            'password' => bcrypt('fulano123'),
        ]);
        User::create([
            'name' => 'Ciclano dos Santos',
            'email' => 'ciclano@exemploemail.com',
            'password' => bcrypt('ciclano321'),
        ]);
    }
}