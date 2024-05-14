<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'job',
        'salary',
        'experience',
        'office',
        'date',
        'type',
        'location',
        'filename',
        'created_at',
        'updated_at'
    ];

}
