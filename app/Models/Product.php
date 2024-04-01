<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'filename',
        'id_collection',
        'updated_at',
        'updated_at'
    ];

    public function collection()
    {
        return $this->belongsTo(collection::class, 'id_collection');
    }
}
