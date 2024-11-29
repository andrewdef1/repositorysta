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
            $table->unsignedBigInteger('id_kategori_jurnal')->constrained()->cascadeOnDelete();
            $table->string('file');
            $table->unsignedBigInteger('id_user')->constrained()->cascadeOnDelete();
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