<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'filename',
        'id_category',
        'updated_at',
        'updated_at'
    ];
}
