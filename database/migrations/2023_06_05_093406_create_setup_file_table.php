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
        Schema::create('setup_file', function (Blueprint $table) {
            $table->increments('id_setup_file');
            $table->unsignedInteger('id_auditee');
            $table->string('nama_file', 100);
            $table->text('deskripsi_file');
            $table->foreign('id_auditee')->references('id_auditee')->on('auditee')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('setup_file');
    }
};
