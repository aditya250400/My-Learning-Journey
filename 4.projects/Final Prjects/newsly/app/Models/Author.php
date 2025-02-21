<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Author extends Model
{
    use SoftDeletes;
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
}
