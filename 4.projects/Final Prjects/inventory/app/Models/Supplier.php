<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\HasScope;


class Supplier extends Model
{
    use HasScope;

    protected $guarded = [];
}
