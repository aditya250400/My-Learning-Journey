<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Category extends Model
{
    use softDeletes, HasFactory;
    protected $guarded = [];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
    public function news()
    {
        return $this->hasMany(ArticleNews::class);
    }

    protected function icon(): Attribute
    {
        return Attribute::make(
            get: fn($image) => $image ? url('/storage/' . $image) : 'https://fakeimg.pl/600x400?text=Image',
        );
    }
}
