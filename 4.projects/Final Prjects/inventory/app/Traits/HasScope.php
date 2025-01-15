<?php

namespace App\Traits;

trait HasScope
{
    public function scopeSearch($query, $column)
    {
        return $query->when(request()->search, function ($search) use ($column) {
            $search = $search->where($column, 'like', '%' . request()->search . '%');
        });
    }
}
