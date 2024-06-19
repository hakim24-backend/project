<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Digital extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'category_file',
        'filename_img',
        'filename',
        'created_at',
        'updated_at'
    ];
}
