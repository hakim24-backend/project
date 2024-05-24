<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Typical extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'filename',
        'id_category',
        'created_at',
        'updated_at'
    ];
}
