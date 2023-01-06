<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id','nama_mobil', 'jenis_mobil', 'harga', 'deskripsi', 'jumlah_kursi', 'bahan_bakar', 'jenis_transmisi', 'mobil_photo_path' 
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\Users');
    }

    public function InversTransaksi(){

        return $this->belongsTo(Transaction::class);
    }

}
