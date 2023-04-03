<?php

namespace App\Http\Controllers\Help;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ResizeController extends Controller
{
    public function resize(Request $request, $url)
    {

        $image = Image::make($url);

        $screenWidth = $request->header('X-Device-Width');
        if ($screenWidth < 768) {
            $imageSize = ['width' => 320, 'height' => 240];
        } elseif ($screenWidth < 1440) {
            $imageSize = ['width' => 212, 'height' => 212];
        } else {
            $imageSize = ['width' => 340, 'height' => 160];
        }
        $image->resize($imageSize['width'], $imageSize['height']);

        return $image->encode('data-url')->encoded;
    }
}
