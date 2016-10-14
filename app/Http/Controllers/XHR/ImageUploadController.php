<?php

namespace App\Http\Controllers\XHR;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImageUploadController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /* Company logo upload */
    public function companyUploadLogoImage()
    {
        $image = new \Images($this->request->file());
        return $image->setCompanyLogoImage();
    }

    public function companyDeleteLogoImage()
    {
        $delete = new \Images();
        $delete->deleteCompanyLogoImage($this->request->get('imageName'));
    }

    /* Ad images upload */
    public function adUploadImage()
    {
        $image = new \Images($this->request->file());
        return $image->setAdImage();
    }

    public function adDeleteImage()
    {
        $delete= new \Images();
        $delete->deleteAdImages($this->request->get('imageName'));
    }
}
