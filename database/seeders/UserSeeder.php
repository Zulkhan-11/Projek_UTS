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
            'nama' => 'Dr. Naufal Muflih',
            'alamat' => 'Jl Pamularsih No.2',
            'no_hp' => '081727156423',
            'email' => 'dokter@gmail.com',
            'role' => 'dokter',
            'password' => Hash::make('password')
        ]);
        User::create([
            'nama' => 'Dr. Naufal Muflih',
            'alamat' => 'Jl Pamularsih No.2',
            'no_hp' => '081727156423',
            'email' => 'pasien@gmail.com',
            'role' => 'pasien',
            'password' => Hash::make('password')
        ]);
    }

    
    
}
