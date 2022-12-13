<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

/**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    public $fillable = [
            'id_user',
            'id_mobil',
            'tanggal_transaksi',
            'status_transaksi',
            'tanggal_sewa',
            'tanggal_pengembalian',
            'metode_pembayaran',
            'status_pengembalian',
            'denda'
    ];

}