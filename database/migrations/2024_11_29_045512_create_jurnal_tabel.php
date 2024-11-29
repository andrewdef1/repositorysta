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
        Schema::create('jurnal', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('abstrak');
            $table->string('author');
            $table->string('keyword');
            $table->integer('halaman');
            $table->date('date_publish');
            $table->string('id_kategori_jurnal');
            $table->string('file');
            $table->string('id_user');
            $table->timestamps();

            $table->foreign('id_kategori_jurnal')->references('id')->on('kategori_jurnal');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jurnal');
    }
};
