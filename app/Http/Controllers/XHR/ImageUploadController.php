<?php

namespace App\Http\Controllers\XHR;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{

    public function companyUploadLogoImage(Request $request)
    {
        $image = new \Images($request->file());
        return $image->setCompanyLogoImage();
    }

    public function companyDeleteLogoImage(Request $request)
    {
        $delete = new \Images();
        $delete->deleteCompanyLogoImage($request->get('name'));
    }
}
