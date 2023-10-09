<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TersimanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('tersimpans')->insert([
            [
                'parent' => 'MAP-PER-1',
                'item' => 'DOK-UMU-1',
                'nama_item' => 'Dokumen Kas Keluar',
                'created_at' => $now,
            ],
            [
                'parent' => '',
                'item' => 'BOX-ONC-2',
                'nama_item' => 'Box On Call',
                'created_at' => $now,
            ],
            [
                'parent' => 'BOX-ONC-2',
                'item' => 'MAP-PER-1',
                'nama_item' => 'Map Kas Masuk',
                'created_at' => $now,
            ],
        ]);
    }
}
