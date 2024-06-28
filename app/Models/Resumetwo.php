<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resumetwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'id_detail_careertwo',
        'filename',
        'created_at',
        'updated_at'
    ];
}
