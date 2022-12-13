<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user','nama_mobil', 'jenis_mobil', 'harga', 'deskripsi', 'jumlah_kursi', 'bahan_bakar', 'jenis_transmisi' 
    ];
}
