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
    Schema::create('penggunas', function (Blueprint $table) {
        $table->id();
        $table->string('nama_pengguna'); // Nama pengguna
        $table->string('password'); // Password pengguna
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('penggunas');
}
};
