<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('makanans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_makanan'); // Nama makanan
        $table->text('deskripsi')->nullable(); // Deskripsi makanan
        $table->text('harga'); // Deskripsi makanan
        $table->foreignId('kategori_id')->constrained('kategoris')->onDelete('cascade'); // Relasi dengan kategori
        $table->string('gambar')->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('makanans');
}
};
