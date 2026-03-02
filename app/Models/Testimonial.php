<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Testimonial extends Model
{
    protected $fillable = [
        'name',
        'position',
        'content',
        'avatar',
        'rating',
        'sort_order',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    protected static function booted()
    {
        static::updating(function ($model) {
            if ($model->isDirty('avatar')) {
                $old = $model->getOriginal('avatar');
                if ($old && Storage::disk('public')->exists($old)) {
                    Storage::disk('public')->delete($old);
                }
            }
        });

        static::deleting(function ($model) {
            if ($model->avatar && Storage::disk('public')->exists($model->avatar)) {
                Storage::disk('public')->delete($model->avatar);
            }
        });
    }
}
