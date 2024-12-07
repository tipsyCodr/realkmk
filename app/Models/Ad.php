<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'url',
        'image',
        'position',
        'location'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($ad) {
            if (is_null($ad->position)) {
                // Get the maximum position value
                $maxPosition = static::max('position') ?? 0;
                // Set the new position as max + 1
                $ad->position = $maxPosition + 1;
            }
        });
    }
}
