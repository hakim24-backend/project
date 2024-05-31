<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypicalCollection extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'filename',
        'id_collection',
        'created_at',
        'updated_at'
    ];
}
