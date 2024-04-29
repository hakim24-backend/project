<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'name_css',
        'filename',
        'description',
        'status',
        'created_at',
        'updated_at'
    ];
}
