<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListMobil extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('listMobil')->insert([

            [
                'nopol' => 'W 1932 ER',
                'merk' => 'Honda',
                'odo_meter' => '19232',
                'fuel' => '60%',
                'admin' => '-',
                'created_at' => $now
            ],
            [
                'nopol' => 'L 6231 GG',
                'merk' => 'Honda',
                'odo_meter' => '2182',
                'fuel' => '30%',
                'admin' => '-',
                'created_at' => $now
            ],
            [
                'nopol' => 'W 72 MR',
                'merk' => 'Suzuki',
                'odo_meter' => '22351',
                'fuel' => '15%',
                'admin' => '-',
                'created_at' => $now
            ],
        ]);
    }
}