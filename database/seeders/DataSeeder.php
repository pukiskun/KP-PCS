<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('datas')->insert([
            [
            'kode' => 'DOK-UMU-1',
            'nama' => 'Dokumen Kas Keluar',
            'nomorSurat' => '123-KLR-456',
            'kategoris_id' => 3,
            'divisions_id' => 1,
            'keterangan' => 'Tes',
            ],
            [
            'kode' => 'BOX-ONC-2',
            'nama' => 'Box On Call',
            'nomorSurat' => '123-PER-456',
            'kategoris_id' => 1,
            'divisions_id' => 1,
            'keterangan' => 'Tes',
            ],
            [
            'kode' => 'MAP-PER-1',
            'nama' => 'Map Kas Masuk',
            'nomorSurat' => '123-MSK-456',
            'kategoris_id' => 2,
            'divisions_id' => 1,
            'keterangan' => 'Tes',
            ],
        ]);
    }
}
