<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'thumbnail',
        'post_category_id',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'status' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }

    public function scopePublished($query)
    {
        return $query->where('status', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
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
