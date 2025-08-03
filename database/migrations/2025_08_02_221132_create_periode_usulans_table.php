<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('periode_usulans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_periode');
            $table->year('tahun_periode'); // <-- KOLOM BARU DITAMBAHKAN
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->enum('status', ['Buka', 'Tutup'])->default('Tutup');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('periode_usulans');
    }
};
