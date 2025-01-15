<?php

namespace App\Traits;

use Illuminate\Support\Facades\Schema;

trait HasSlug
{
    public static  function BootHasSlug()
    {
        static::creating(function ($model) {
            if (Schema::hasColumn($model->getTable(), 'slug'))
                $model->slug = str()->slug($model->name ?? $model->title);
        });
    }
}
