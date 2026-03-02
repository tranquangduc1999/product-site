<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
class Banner extends Model
{
    protected $fillable = [
        'title',
        'image',
        'link',
        'position',
        'sort_order',
        'status',
    ];
    protected static function booted()
    {
        // Khi update
        static::updating(function ($banner) {

            // Nếu image bị thay đổi
            if ($banner->isDirty('image')) {

                $oldImage = $banner->getOriginal('image');

                if ($oldImage && Storage::disk('public')->exists($oldImage)) {
                    Storage::disk('public')->delete($oldImage);
                }
            }
        });

        // Khi xóa banner
        static::deleting(function ($banner) {

            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
        });
    }
}
