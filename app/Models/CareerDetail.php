<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareerDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'desc_job',
        'desc_location',
        'name_contact',
        'phone_contact',
        'email_contact',
        'website_contact',
        'id_career'
    ];

    public function career()
    {
        return $this->belongsTo(Career::class, 'id_career');
    }

}
