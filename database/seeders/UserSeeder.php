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
            'nama' => 'Dr. Zulkhan',
            'alamat' => 'Jl Bulustalan No.4',
            'no_hp' => '085654712561',
            'email' => 'dokterZulkhan@gmail.com',
            'role' => 'dokter',
            'password' => Hash::make('password')
        ]);
        User::create([
            'nama' => 'Dr. Zulkhan',
            'alamat' => 'Jl Bulustalan No.4',
            'no_hp' => '085654712561',
            'email' => 'pasien@gmail.com',
            'role' => 'pasien',
            'password' => Hash::make('password')
        ]);
    }

    
    
}
