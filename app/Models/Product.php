<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'harga', 'harga_nameset', 'judul_id', 'is_ready', 'jenis', 'berat', 'gambar'];

    public function judul()
    {
        return $this->belongsTo(Judul::class, 'judul_id', 'id');
    }

    public function pesanan_details()
    {
        return $this->hasMany(PesananDetail::class, 'product_id', 'id');
    }
}
