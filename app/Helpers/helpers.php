<?php

use Illuminate\Support\Facades\Storage;

if (!function_exists('image_url')) {

    /**
     * Generate full image URL.
     *
     * @param  string|null  $path
     * @param  string|null  $disk
     * @param  string|null  $default
     * @return string|null
     */
    function image_url(?string $path, string $disk = 'public', ?string $default = null): ?string
    {
        if (!$path) {
            return $default ? asset($default) : null;
        }

        // Nếu là URL ngoài (CDN, https...)
        if (filter_var($path, FILTER_VALIDATE_URL)) {
            return $path;
        }

        return Storage::disk($disk)->url($path);
    }
}
