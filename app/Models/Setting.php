<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'logo',
        'favicon',
        'hotline',
        'email',
        'address',
        'facebook',
        'zalo',
        'meta_title',
        'meta_description',
        'google_analytics',
    ];
}
