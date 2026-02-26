<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Page extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'template',
        'status',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', true);
    }

    protected static function booted()
    {
        static::creating(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
