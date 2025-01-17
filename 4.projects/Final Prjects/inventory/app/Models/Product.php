<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
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
