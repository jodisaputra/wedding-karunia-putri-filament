<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot(): void
    {
        parent::boot();

        //for update image
        static::updating(function ($event) {
            if ($event->isDirty('event_image')) {
                // Delete the old image when a new image is provided
                $oldImagePath = public_path('storage/' . $event->getOriginal('event_image'));
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }
        });

        //for delete file image will deleted too
        static::deleting(function ($event) {
            // Delete the associated image when a gallery record is deleted
            $imagePath = public_path('storage/' . $event->event_image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        });
    }
}
