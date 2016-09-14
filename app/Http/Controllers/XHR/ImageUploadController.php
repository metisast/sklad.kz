<?php

namespace App\Http\Controllers\XHR;

use Illuminate\Http\Request;
use Helpers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{

    public function companyUploadImage(Request $request)
    {
        $image = new \Images($request->file());
        return $image->setProductImages();
    }
}
