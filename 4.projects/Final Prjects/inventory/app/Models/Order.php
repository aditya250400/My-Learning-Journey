<?php

namespace App\Models;

use App\Enums\OrderStatus;
use App\Traits\HasScope;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasScope;

    protected $guarded = [];

    protected $casts = [
        'status' => OrderStatus::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
