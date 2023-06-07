<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

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
}
