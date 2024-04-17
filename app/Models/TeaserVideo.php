<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\UploadedFile;

class TeaserVideo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(): void
    {
        parent::boot();

        //for update image
        static::updating(function ($teaser) {
            if ($teaser->isDirty('teaser_video')) {
                // Delete the old image when a new image is provided
                $oldImagePath = public_path('storage/' . $teaser->getOriginal('teaser_video'));
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        });

        //for delete file image will deleted too
        static::deleting(function ($teaser) {
            // Delete the associated image when a gallery record is deleted
            $imagePath = public_path('storage/' . $teaser->teaser_video);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        });
    }
}
