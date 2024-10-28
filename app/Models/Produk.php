<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produks';

    protected $fillable = [
        'nama_produk', // Ganti nama_barang menjadi nama_produk
        'stok',
        'kategori',
        'tanggal_masuk',
        'tersedia',
    ];

    // Relasi One-to-Many dengan model Penjualan
    public function penjualans()
    {
        return $this->hasMany(Penjualan::class, 'produk_id'); // Ganti barang_id menjadi produk_id
    }
}