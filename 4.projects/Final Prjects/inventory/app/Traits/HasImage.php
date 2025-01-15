<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait HasImage
{
    public function uploadImage($request, $path)
    {
        $image = null;

        if ($request->file('image')) {
            $image = $request->file('image');
            $image->storeAs($path, $image->hashName());
        }

        return $image;
    }

    public function updateImage($path, $model, $name)
    {
        Storage::disk('local')->delete($path, basename($model->image));
        $model->update(['image'  => $name]);

        return $model;
    }
}
