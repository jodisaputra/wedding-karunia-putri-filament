<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(): void
    {
        parent::boot();

        //for update image
        static::updating(function ($gallery) {
            if ($gallery->isDirty('image')) {
                // Delete the old image when a new image is provided
                $oldImagePath = public_path('storage/' . $gallery->getOriginal('image'));
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        });

        //for delete file image will deleted too
        static::deleting(function ($gallery) {
            // Delete the associated image when a gallery record is deleted
            $imagePath = public_path('storage/' . $gallery->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        });
    }
}
