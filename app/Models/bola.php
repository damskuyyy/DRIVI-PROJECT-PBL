<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bola extends Model
{
    use HasFactory;
    // protected $table = 'bolas';
    protected $fillable = ['id_user','no_telepon','alamat','nama_perusahaan'];
}
