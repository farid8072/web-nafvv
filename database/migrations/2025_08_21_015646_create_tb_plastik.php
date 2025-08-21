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
        Schema::create('tb_plastik', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->decimal('input_sampah', 10, 2);
            $table->string('jenis_sampah');
            $table->string('penanganan');
            $table->string('hasil_rendah');
            $table->string('hasil_tinggi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_plastik');
    }
};
