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
        Schema::create('auditee', function (Blueprint $table) {
            $table->increments('id_auditee');
            $table->unsignedInteger('id_user');
            $table->string('nama_auditee', 100);
            $table->string('sub_bagian', 100);
            $table->foreign('id_user')->references('id_user')->on('user')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditee');
    }
};
