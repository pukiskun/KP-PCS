<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [

                'name' => 'Administrator',
                'email' => 'admin@admin',
                'password' => bcrypt('adminadmin'),
                'tanggalLahir' => '1987-02-09',
                'telepon' => '087273827412',
                'jenisKelamin' => 'Wanita',
                'tentangSaya' => '-'
            ],
            [
                'name' => 'Mas Jeab',
                'email' => 'masjeab@admin',
                'password' => bcrypt('123'),
                'tanggalLahir' => '2002-07-13',
                'telepon' => '087765853710',
                'jenisKelamin' => 'Pria',
                'tentangSaya' => '-'
            ]
        ]);
    }
}