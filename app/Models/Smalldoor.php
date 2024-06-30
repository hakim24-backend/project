<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Smalldoor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'filename',
        'id_product',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_product');
    }
}
