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
        Schema::create('auditor_unit', function (Blueprint $table) {
            $table->increments('id_auditor');
            $table->unsignedInteger('id_user');
            $table->unsignedInteger('id_unit_audit');
            $table->string('nama_auditor', 100);
            $table->string('nip_auditor', 10);
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('id_unit_audit')->references('id_unit_audit')->on('unit_audit')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditor_unit');
    }
};
