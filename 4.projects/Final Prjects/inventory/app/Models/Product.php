<?php

namespace App\Models;

use App\Traits\HasScope;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasSlug, HasScope;

    protected $fillable = [
        'category_id',
        'supplier_id',
        'name',
        'slug',
        'description',
        'quantity',
        'image',
        'unit'
    ];
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => asset('storage/products/' . $image)
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }

    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
