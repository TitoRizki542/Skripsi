<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {


        Admin::create([
            'nama' => 'Mas Admin',
            // 'role' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => Hash::make('12341234'),
            'jenis_kelamin' => 'Laki laki',
            'alamat' => 'Candirejo',
            'nomer_hp' => '08121212',
        ]);

       User::create([
            'nama' => 'Tito Rizki Purnomo',
            'email' => 'titorizki1@gmail.com',
            'username' => 'Tito Rizki',
            'password' => Hash::make('12341234'),
            'jenis_kelamin' => 'laki laki',
            'alamat' => 'Candirejo',
            'nomor_hp' => ' 085728006071',
        ]);

       User::create([
            'nama' => 'Tito Fajar Hidayah',
            'email' => 'titofajar2@gmail.com',
            'username' => 'Tito Fajar',
            'password' => Hash::make('12341234'),
            'jenis_kelamin' => 'perempuan',
            'alamat' => 'Candirejo',
            'nomor_hp' => ' 085728889081',
        ]);
        User::create([
            'nama' => 'Muhammad Fauzaan',
            'email' => 'mfauzaan@gmail.com',
            'username' => 'Zaan',
            'password' => Hash::make('12341234'),
            'jenis_kelamin' => 'laki laki',
            'alamat' => 'Tangerang, Banten',
            'nomor_hp' => '081233334444',
        ]);


    }
}
