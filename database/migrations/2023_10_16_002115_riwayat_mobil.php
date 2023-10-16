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
        Schema::create('riwayat_mobils', function (Blueprint $table) {
            $table->id();
            $table->string('nopol');
            $table->string('merk');
            $table->string('odo_meter')->nullable();
            $table->string('fuel')->nullable();
            $table->string('admin')->nullable();
            $table->string('status')->nullable();
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat_mobils');
    }
};