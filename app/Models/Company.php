<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'tittle1',
        'desc1',
        'tittle2',
        'desc2',
        'tittle3',
        'desc3',
        'tittle4',
        'desc4',
        'tittle5',
        'desc5',
        'filename',
        'created_at',
        'updated_at'
    ];
}
