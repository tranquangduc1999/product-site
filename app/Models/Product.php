<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'content',
        'price',
        'thumbnail',
        'gallery',
        'product_category_id',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
        'stock',
        'has_variants',
    ];

    protected $casts = [
        'gallery' => 'array',
        'published_at' => 'datetime',
        'status' => 'boolean',
    ];

    /* ================= RELATIONSHIPS ================= */

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    /* ================= SCOPES ================= */

    public function scopePublished($query)
    {
        return $query->where('status', true)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /* ================= BOOT ================= */

    protected static function booted()
    {
        static::creating(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug($model->name);
            }
        });
    }
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function isInStock(): bool
    {
        if ($this->has_variants) {
            return $this->variants()->sum('stock') > 0;
        }

        return $this->stock > 0;
    }
    public function defaultVariant()
    {
        return $this->hasOne(ProductVariant::class)->where('is_default', true);
    }
}
