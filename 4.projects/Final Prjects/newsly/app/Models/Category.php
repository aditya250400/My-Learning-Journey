<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use softDeletes;
    protected $guarded = [];

    public function news()
    {
        return $this->hasMany(ArticleNews::class);
    }
}
