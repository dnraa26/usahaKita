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
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'posts_user_id'
            );
            // $table->unsignedInteger('user_id');
            $table->string('pemilik_perusahaan');
            $table->string('email_perusahaan');
            $table->string('nama_perusahaan');
            $table->string('no_telp');
            $table->unsignedBigInteger('kategori');
            $table->foreign('kategori')->references('id_kategori')->on('kategori_bisnis')->onDelete('restrict');
            $table->string('cabang_pusat');
            $table->string('foto_ktp');
            $table->string('foto_perusahaan');
            $table->string('deskripsi');
            $table->enum('status',['terverifikasi','pendding'])->default('pendding');
            $table->string('alasan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perusahaan');
    }
};
