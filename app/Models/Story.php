<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(): void
    {
        parent::boot();

        //for update image
        static::updating(function ($gallery) {
            if ($gallery->isDirty('story_image')) {
                // Delete the old image when a new image is provided
                $oldImagePath = public_path('storage/' . $gallery->getOriginal('story_image'));
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        });

        static::deleting(function ($story) {
            // Delete the associated image when a gallery record is deleted
            $imagePath = public_path('storage/' . $story->story_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        });
    }
}
