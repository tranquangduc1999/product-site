<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function warranties()
    {
        return $this->hasMany(Warranty::class);
    }

}
