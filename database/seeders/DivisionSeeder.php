<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('divisions')->insert([
            [
            'nama' => 'Umum & IT',
            ],
            [
            'nama' => 'SDM',
            ],
            [
            'nama' => 'Pengadaan',
            ],
            [
            'nama' => 'Perdagangan',
            ],
            [
            'nama' => 'Audit Internal',
            ],
            [
            'nama' => 'On Call',
            ],
            [
            'nama' => 'All In',
            ],
        ]);
    }
}
