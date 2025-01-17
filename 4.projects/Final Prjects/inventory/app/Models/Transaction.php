<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasScope;

class Transaction extends Model
{
    use HasScope;

    protected $fillable = ['user_id', 'invoice'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
