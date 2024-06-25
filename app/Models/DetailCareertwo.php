<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailCareertwo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'job',
        'salary',
        'schedule',
        'day_of',
        'location',
        'requirment',
        'desc_location',
        'name_contact',
        'phone_contact',
        'email_contact',
        'website_contact',
        'id_careertwo',
        'created_at',
        'updated_at'
    ];

    public function careertwo()
    {
        return $this->belongsTo(Careertwo::class, 'id_careertwo');
    }
}
