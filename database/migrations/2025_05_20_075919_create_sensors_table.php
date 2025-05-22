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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->float('suhu');           // suhu dalam Celsius
            $table->float('kelembapan');     // kelembapan dalam persen
            $table->timestamp('waktu_tercatat')->useCurrent(); // waktu pencatatan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sensors');
    }
};
