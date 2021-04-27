<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'updated_date';
}
