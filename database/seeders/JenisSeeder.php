<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kondisis')->insert([
            [
                'nama' => 'Baik',
            ],
            [
                'nama' => 'Rusak',
            ],
            [
                'nama' => 'Cukup',
            ],
            [
                'nama' => 'Kurang',
            ],
            [
                'nama' => 'Tidak/Ada',
            ],
        ]);
    }
}
