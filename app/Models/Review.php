<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $table='reviews';
    protected $primarykey='id';
    public $timestamps=true;
    protected $fillable = ['id_detail_user','id_mobil','bintang','komentar'];
    
}
