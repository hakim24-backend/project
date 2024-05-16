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
        'filename1',
        'detail_filename',
        'id_collection',
        'created_at',
        'updated_at'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class, 'id_collection');
    }

    public function description()
    {
        return $this->hasMany(Description::class, 'id_product');
    }
}
