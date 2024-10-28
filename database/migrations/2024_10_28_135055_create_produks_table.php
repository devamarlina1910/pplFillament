<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk'); // Ganti nama_barang menjadi nama_produk
            $table->integer('stok');
            $table->enum('kategori', ['makanan', 'minuman', 'kebutuhan_rumah_tangga', 'lainnya']);
            $table->date('tanggal_masuk');
            $table->boolean('tersedia')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};