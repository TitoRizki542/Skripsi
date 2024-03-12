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
        Schema::create('paketwisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_paket');
            $table->string('harga');
            $table->text('deskripsi');
            $table->text('fasilitas');
            $table->string('alamat');
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paketwisata');
    }
};
