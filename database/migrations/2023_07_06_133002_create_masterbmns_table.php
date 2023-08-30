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
        Schema::create('masterbmns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ruangan_id');
            $table->string('br_kode');
            $table->string('br_nama');
            $table->integer('nl_nup');
            $table->string('br_kondisi');
            $table->string('br_merk');
            $table->date('tg_rekam_pertama');
            $table->date('tg_perolehan');
            $table->integer('nl_perolehan_pertama');
            $table->integer('nl_mutasi');
            $table->integer('nl_perolehan');
            $table->integer('nl_penyusutan');
            $table->integer('nl_buku');
            $table->integer('nl_qty');
            $table->integer('nl_photo');
            $table->string('br_status');
            $table->string('br_no_psp');
            $table->string('tg_psp');
            $table->integer('nl_kib');
            $table->float('nl_latitude');
            $table->float('nl_longitude');
            $table->date('tg_pengambilan_photo');
            $table->string('br_link_photo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masterbmns');
    }
};
