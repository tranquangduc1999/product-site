<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class Product extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'content',
        'price',
        'sale_price',
        'thumbnail',
        'gallery',
        'product_category_id',
        'status',
        'published_at',
        'meta_title',
        'meta_description',
        'stock',
        'warranty_period',
        'warranty_policy',
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
    public function brand()
    {
        return $this->belongsTo(Brand::class);
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
        // Tự tạo slug khi tạo mới
        static::creating(function ($model) {
            if (!$model->slug) {
                $model->slug = Str::slug($model->name);
            }
        });

        // Khi update product
        static::updating(function ($product) {

            // ===== XỬ LÝ THUMBNAIL =====
            if ($product->isDirty('thumbnail')) {

                $oldThumbnail = $product->getOriginal('thumbnail');

                if ($oldThumbnail && Storage::disk('public')->exists($oldThumbnail)) {
                    Storage::disk('public')->delete($oldThumbnail);
                }
            }

            // ===== XỬ LÝ GALLERY =====
            if ($product->isDirty('gallery')) {

                $oldGallery = $product->getOriginal('gallery') ?? [];
                $newGallery = $product->gallery ?? [];

                // Xoá những ảnh cũ không còn trong gallery mới
                foreach ($oldGallery as $oldImage) {
                    if (!in_array($oldImage, $newGallery)) {
                        if (Storage::disk('public')->exists($oldImage)) {
                            Storage::disk('public')->delete($oldImage);
                        }
                    }
                }
            }
        });

        // Khi xóa product
        static::deleting(function ($product) {

            // Xoá thumbnail
            if ($product->thumbnail && Storage::disk('public')->exists($product->thumbnail)) {
                Storage::disk('public')->delete($product->thumbnail);
            }

            // Xoá gallery
            if (is_array($product->gallery)) {
                foreach ($product->gallery as $image) {
                    if ($image && Storage::disk('public')->exists($image)) {
                        Storage::disk('public')->delete($image);
                    }
                }
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
