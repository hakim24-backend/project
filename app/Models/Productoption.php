<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productoption extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'note',
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
