<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ownerdetail extends Model
{
    use HasFactory;
    protected $fillable = ['id_detail_user','id_mobil','bintang','komentar'];
}
