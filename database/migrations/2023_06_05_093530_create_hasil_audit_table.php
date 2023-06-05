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
        Schema::create('hasil_audit', function (Blueprint $table) {
            $table->increments('id_hasil_audit');
            $table->unsignedInteger('id_standar_ruang_lingkup');
            $table->text('kondisi_awal');
            $table->text('dasar_evaluasi');
            $table->text('penyebab');
            $table->text('akibat');
            $table->text('feedback');
            $table->date('tanggal_kesanggupan_penyelesaian');
            $table->text('rekomendasi_follow_up');
            $table->text('tindak_lanjut');
            $table->foreign('id_standar_ruang_lingkup')->references('id_standar_ruang_lingkup')->on('standar_ruang_lingkup')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_audit');
    }
};
