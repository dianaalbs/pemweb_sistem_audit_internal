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
        Schema::create('standar_ruang_lingkup', function (Blueprint $table) {
            $table->increments('id_standar_ruang_lingkup');
            $table->unsignedInteger('id_setup_file');
            $table->string('nama_ruang_lingkup', 100);
            $table->string('jenis_ruang_lingkup', 100);
            $table->text('deskripsi_ruang_lingkup');
            $table->foreign('id_setup_file')->references('id_setup_file')->on('setup_file')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('standar_ruang_lingkup');
    }
};
