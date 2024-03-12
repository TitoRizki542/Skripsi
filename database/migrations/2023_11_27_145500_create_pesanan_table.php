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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paketwisata_id')->constrained('paketwisata');
            $table->foreignId('users_id')->constrained('users');
            $table->date('tanggal_pesanan');
            $table->date('tanggal_kedatangan');
            $table->time('jam_kedatangan')->unique();
            $table->integer('jumlah_orang');
            $table->string('total_harga');
            // $table->string('bukti_pesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};

