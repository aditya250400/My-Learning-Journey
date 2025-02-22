<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BannerAdvertisement extends Model
{
    use SoftDeletes;

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn($image) => $image ? url('/storage/' . $image) : 'https://fakeimg.pl/600x400?text=Image',
        );
    }

    protected $guarded = [];
}
