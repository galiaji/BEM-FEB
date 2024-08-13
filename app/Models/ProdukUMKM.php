<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdukUMKM extends Model
{
    use HasFactory;
    protected $table = 'produk_umkms';
    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'foto_produk',
    ];
}
