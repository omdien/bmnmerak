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
        Schema::create('ruangans', function (Blueprint $table) {
            $table->id();
            $table->integer('nl_nup');
            $table->integer('nl_lantai');
            $table->integer('nl_luas');
            $table->string('ru_type');
            $table->integer('nl_ruang');
            $table->string('ru_ket');
            $table->string('ru_kode');
            $table->string('ru_nama');
            $table->string('ru_dbr')->nullable();
            $table->string('ru_barcode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangans');
    }
};
