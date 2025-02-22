<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class ArticleNews extends Model
{
    use SoftDeletes, HasFactory;
    protected $guarded = [];

    protected function thumbnail(): Attribute
    {
        return Attribute::make(
            get: fn($image) => $image ? url('/storage/' . $image) : 'https://fakeimg.pl/600x400?text=Image',
        );
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
