<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ProductCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
        'status',
    ];

    /* ================= RELATIONSHIPS ================= */

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
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
}
