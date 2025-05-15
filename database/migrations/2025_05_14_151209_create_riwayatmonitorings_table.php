<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('riwayatmonitorings', function (Blueprint $table) {
            $table->id();
            $table->string('location')->default('Kumbung A'); // Ruang budidaya
            $table->float('temperature'); // Suhu dalam °C
            $table->float('humidity');    // Kelembapan dalam %
            $table->timestamp('recorded_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayatmonitorings');
    }
};
