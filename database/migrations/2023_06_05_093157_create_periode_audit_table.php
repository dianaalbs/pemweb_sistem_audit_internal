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
        Schema::create('periode_audit', function (Blueprint $table) {
            $table->increments('id_periode_audit');
            $table->date('tanggal_awal_audit');
            $table->date('tanggal_akhir_audit');
            $table->string('no_sk_tugas_audit', 100);
            $table->string('file_sk', 100);
            $table->date('tanggal_sk');
            $table->string('ketua_spi', 100);
            $table->string('nip_ketua_spi', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('periode_audit');
    }
};
