<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;

    protected $fillable = [
        'produk_id', // Ganti barang_id menjadi produk_id
        'jumlah_penjualan',
        'tanggal_penjualan',
    ];

    // Relasi dengan model Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class, 'produk_id'); // Ganti barang_id menjadi produk_id
    }
}