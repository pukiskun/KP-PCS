<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KondisiMobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('kondisi_mobils')->insert([
            [
                'nopol' => 'W 1932 ER',
                'stnk' => 'CUKUP',
                'pajak' => 'KURANG',
                'uji_keur' => 'BAIK',
                'lain_lain' => 'BAIK',
                'body_luar' => 'BAIK',
                'air_radiator' => 'BAIK',
                'air_accu' => 'KURANG',
                'air_wipper' => 'BAIK',
                'air_ac' => 'KURANG',
                'oli_mesin' => 'RUSAK',
                'minyak_rem' => 'BAIK',
                'oli_steering' => 'BAIK',
                'lampu_utama' => 'KURANG',
                'lampu_kota' => 'KURANG',
                'fog_lamp' => 'BAIK',
                'lampu_sein' => 'KURANG',
                'lampu_belakang' => 'BAIK',
                'lampu_atret' => 'BAIK',
                'lampu_kabin' => 'KURANG',
                'ban_terpasang' => 'BAIK',
                'ban_serve' => 'BAIK',
                'wipper_depan' => '',
                'wipper_belakang' => 'KURANG',
                'suara_mesin' => 'BAIK',
                'rem' => 'KURANG',
                'kunci_roda' => 'BAIK',
                'dongkrak' => 'KURANG',
                'segitiga_pengaman' => 'BAIK',
                'kebersihan' => 'BAIK',
                'keterangan' => '-',
            ],
        ]);
    }
}