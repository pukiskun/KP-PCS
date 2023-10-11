<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kondisi_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nopol');
            $table->string('stnk');
            $table->string('pajak');
            $table->string('uji_keur');
            $table->string('lain_lain');
            $table->string('body_luar');
            $table->string('air_radiator');
            $table->string('air_accu');
            $table->string('air_wipper');
            $table->string('air_ac');
            $table->string('oli_mesin');
            $table->string('minyak_rem');
            $table->string('oli_steering');
            $table->string('lampu_utama');
            $table->string('lampu_kota');
            $table->string('fog_lamp');
            $table->string('lampu_sein');
            $table->string('lampu_belakang');
            $table->string('lampu_atret');
            $table->string('lampu_kabin');
            $table->string('ban_terpasang');
            $table->string('ban_serve');
            $table->string('wipper_depan');
            $table->string('wipper_belakang');
            $table->string('suara_mesin');
            $table->string('rem');
            $table->string('kunci_roda');
            $table->string('dongkrak');
            $table->string('segitiga_pengaman');
            $table->string('kebersihan');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kondisi_mobils');
    }
};