<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RiwayatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('riwayats')->insert([
            [
                'kode' => 'DOK-UMU-1',
                'nama' => 'Dokumen Kas Keluar',
                'parent' => 'MAP-PER-1',
                'admin' => '-',
                'status' => 'Dibuat',
                'created_at' => $now,
            ],
            [
                'kode' => 'BOX-ONC-2',
                'nama' => 'Box On Call',
                'parent' => null,
                'admin' => '-',
                'status' => 'Dibuat',
                'created_at' => $now,
            ],
            [
                'kode' => 'MAP-PER-1',
                'nama' => 'Map Kas Masuk',
                'parent' => 'BOX-ONC-2',
                'admin' => '-',
                'status' => 'Dibuat',
                'created_at' => $now,
            ],
        ]);
    }
}
