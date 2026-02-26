<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class PostCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug($model->name);
            }
        });
    }
}
