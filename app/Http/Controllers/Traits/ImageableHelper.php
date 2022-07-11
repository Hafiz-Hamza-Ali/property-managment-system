<?php

namespace App\Http\Controllers\Traits;

use App\Image;
use Illuminate\Support\Facades\File;

trait ImageableHelper
{
    public function uploaderImageable($image, $path, $modalType, $type = null, $thumbnail = null)
    {
       //dd($modalType);
        $imageName = time() . uniqid(rand()) . '.' . $image->getClientOriginalExtension();
        $image->move(public_path($path), $imageName);
        

        $imageEntity = new image(['url' => $path . '/' . $imageName, 'type' => $type, 'is_thumbnail' => $thumbnail]);
        $modalType->image()->save($imageEntity);
    }

    public function deleteImageFile($url)
    {
        if (File::exists($url)) {
            File::delete($url);
        }
    }

    public function deleteImageById($id)
    {
        image::find($id)->delete();
    }
}
