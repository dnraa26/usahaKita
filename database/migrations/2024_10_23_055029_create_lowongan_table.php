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
        Schema::create('lowongan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lowongan');
            $table->unsignedInteger('perusahaan_id');
            $table->string('alamat');
            $table->string('requirement');
            $table->string('benefit');
            $table->bigInteger('modal_usaha');
            $table->unsignedInteger('jumlah_lowongan');
            $table->string('logo_perusahaan');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lowongan');
    }
};
