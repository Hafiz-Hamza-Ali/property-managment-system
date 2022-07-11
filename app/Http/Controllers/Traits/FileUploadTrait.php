<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

trait FileUploadTrait
{

    /**
     * File upload trait used in controllers to upload files
     */
    public function saveFiles(Request $request)
    {

		$uploadPath = public_path(env('UPLOAD_PATH'));
		$thumbPath = public_path(env('UPLOAD_PATH').'/thumb');
        if (! file_exists($uploadPath)) {
            mkdir($uploadPath, 0775);
            mkdir($thumbPath, 0775);
        }

        $finalRequest = $request;
        
        foreach ($request->except('imagen') as $key => $value) {
            if ($request->hasFile($key)) {
                if ($request->has($key . '_max_width') && $request->has($key . '_max_height')) {
                    // Check file width
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $file     = $request->file($key);
                    $image    = Image::make($file);
                    if (! file_exists($thumbPath)) {
                        mkdir($thumbPath, 0775, true);
                    }
                    Image::make($file)->resize(50, 50)->save($thumbPath . '/' . $filename);
                    $width  = $image->width();
                    $height = $image->height();
                    if ($width > $request->{$key . '_max_width'} && $height > $request->{$key . '_max_height'}) {
                        $image->resize($request->{$key . '_max_width'}, $request->{$key . '_max_height'});
                    } elseif ($width > $request->{$key . '_max_width'}) {
                        $image->resize($request->{$key . '_max_width'}, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    } elseif ($height > $request->{$key . '_max_width'}) {
                        $image->resize(null, $request->{$key . '_max_height'}, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                    
                    $image->save($uploadPath . '/' . $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                } else {
                    
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $request->file($key)->move($uploadPath, $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                }
            }
        }

        return $finalRequest;
    }
    // public function saveFiles(Request $request)
    // {

	// 	$uploadPath = 'upload';
	// 	//$thumbPath = public_path(env('UPLOAD_PATH').'/thumb');
    //     // if (! file_exists($uploadPath)) {
    //     //     mkdir($uploadPath, 0775);
    //     //     mkdir($thumbPath, 0775);
    //     // }
    //     //dd($request['photo']);
    //     //$finalRequest = $request;

    //      //foreach ($request->except('photo') as $key => $value) {
    //     if(!empty($request['data']))
    //     {
    //         $imageName = time() . uniqid(rand()) . '.' . $request['data']->getClientOriginalExtension();
    //         $request['data']->move(public_path($uploadPath), $imageName);
    //         $request['photo']=$uploadPath . '/' . $imageName;
    //     }
    //      //}data
    //     //     if ($request->hasFile($key)) {
    //     //         if ($request->has($key . '_max_width') && $request->has($key . '_max_height')) {
                    
    //     //             // Check file width
    //     //             $filename = time() . '-' . $request->file($key)->getClientOriginalName();
    //     //             $file     = $request->file($key);
    //     //             $image    = Image::make($file);
    //     //             if (! file_exists($thumbPath)) {
    //     //                 mkdir($thumbPath, 0775, true);
    //     //             }
    //     //             Image::make($file)->resize(50, 50)->save($thumbPath . '/' . $filename);
    //     //             $width  = $image->width();
    //     //             $height = $image->height();
    //     //             if ($width > $request->{$key . '_max_width'} && $height > $request->{$key . '_max_height'}) {
    //     //                 $image->resize($request->{$key . '_max_width'}, $request->{$key . '_max_height'});
    //     //             } elseif ($width > $request->{$key . '_max_width'}) {
    //     //                 $image->resize($request->{$key . '_max_width'}, null, function ($constraint) {
    //     //                     $constraint->aspectRatio();
    //     //                 });
    //     //             } elseif ($height > $request->{$key . '_max_width'}) {
    //     //                 $image->resize(null, $request->{$key . '_max_height'}, function ($constraint) {
    //     //                     $constraint->aspectRatio();
    //     //                 });
    //     //             }
    //     //             //dd($uploadPath . '/' . $filename);
    //     //             $image->save($uploadPath . '/' . $filename);
                    
    //     //             $finalRequest['photo'] = new Request(array_merge($finalRequest->all(), [$key => $filename]));
    //     //         } else {
    //     //             $filename = time() . '-' . $request->file($key)->getClientOriginalName();
    //     //             $request->file($key)->move($uploadPath, $filename);
    //     //             $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
    //     //         }
    //     //     }
    //     // }
    //    // dd( $request);
    //     return $request;
    // }
}