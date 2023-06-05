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
        Schema::create('unit_audit', function (Blueprint $table) {
            $table->increments('id_unit_audit');
            $table->unsignedInteger('id_periode_audit');
            $table->foreign('id_periode_audit')->references('id_periode_audit')->on('periode_audit');
            $table->unsignedInteger('id_standar_ruang_lingkup');
            $table->foreign('id_standar_ruang_lingkup')->references('id_standar_ruang_lingkup')->on('standar_ruang_lingkup')->onDelete('cascade');
            $table->string('nama_unit', 100);
            $table->date('tanggal_audit');
            $table->string('ketua_tim', 100);
            $table->string('nip_ketua_tim', 10);
            $table->timestamps();
        })
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unit_audit');
    }
};
