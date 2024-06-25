<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careertwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name_company',
        'info_company',
        'filename',
        'created_at',
        'updated_at'
    ];
}
