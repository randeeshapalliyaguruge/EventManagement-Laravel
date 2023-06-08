<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\File;

class Event extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'category_id',
        'image',
        'event_name',

        'address',
        'city',
        'zip_code',
        'latitude',
        'longitude',

        'description',
        'price',

        'date',
        'start_time',
        'end_time',

        'phone',
        'email',
        'website',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function registerCollections(): void
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    // public function registerMediaCollections(Media $media = null): void
    // {
    //     $this->addMediaCollection('thumb')
    //         ->width(290)
    //         ->height(250);
    // }

    // public function registerMediaCollections(?Media $media = null): void
    // {
    //     $this->addMediaCollection('thumb')
    //         ->singleFile()
    //         ->registerMediaConversions(function (Media $media) {
    //             $this->addMediaConversion('thumb')
    //                 ->width(290)
    //                 ->height(250);
    //         });
    // }
//     public function registerMediaCollections(?Media $media = null): void
// {
//     $this->addMediaCollection('thumb')
//         ->singleFile()
//         ->setWidth(290)
//         ->setHeight(250);
// }
}
