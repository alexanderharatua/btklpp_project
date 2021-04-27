<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    public $timestamps = true;


    protected $fillable = [
        'judul_buletin',
        'isi_buletin',
        'gambar',
        'created_at',
        'updated_at',
    ];
}
