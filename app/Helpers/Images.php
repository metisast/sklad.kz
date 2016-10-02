<?php
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\File;

class Images
{
    /*
    |--------------------------------------------------------------------------
    | Image manipulation Helper
    |--------------------------------------------------------------------------
    |
     */
    protected $mimeSupported = ['image/png', 'image/jpeg'];
    protected $mimeSave = '.jpg';
    protected $maxImageSize = 5000000;
    protected $nameImage;
    protected $pathImage;
    protected $file;
    protected $mainImageUploadPath;
    public $response;
    public function __construct($file = null)
    {
        $this->nameImage = str_random(32);
        $this->mainImageUploadPath = new \MainImageUpload();

        if($file) $this->fileValidate($file);
    }
    /**
     * Checking file for exceptions
     * @param $file
     * @return bool
     */
    private function fileValidate($file)
    {
        if (!isset($file[0])) throw new FileException(500);
        elseif ($file[0]->getClientSize() > $this->maxImageSize) throw new FileException(500);
        else $this->file = $file[0];
    }
    /**
     * Render full image path
     * @return string
     */
    private function renderImage()
    {
        return $this->pathImage . $this->nameImage . $this->mimeSave;
    }
    /**
     * Prepare user photo
     * @return mixed
     */
    public function setUserPhoto()
    {
        $this->pathImage = public_path() . '/images/users/';
        $main_photo = Auth::user()->main_photo;
        if (in_array($this->file->getMimeType(), $this->mimeSupported)) {
            if ($main_photo) {
                if (file_exists($this->pathImage . $main_photo)) {
                    unlink($this->pathImage . $main_photo);
                    $this->saveUserPhoto();
                } else {
                    $this->saveUserPhoto();
                }
            } else {
                $this->saveUserPhoto();
            }
        }
        return response()->json(['imageName' => Auth::user()->main_photo]);
    }
    /**
     * Make user photo and save to DB
     */
    private function saveUserPhoto()
    {
        Image::make($this->file)->fit(100, 100)->save($this->renderImage(), 100);
        Auth::user()->main_photo = $this->nameImage . $this->mimeSave;
        Auth::user()->save();
    }
    /**
     * Make product images
     * @return \Illuminate\Http\JsonResponse
     */
    public function setCompanyLogoImage()
    {
        $this->pathImage = $this->mainImageUploadPath->getTmpCompanyImageSavePath();
        $this->mimeSave = '.png';
        Image::make($this->file)->fit(130, 130)->save($this->renderImage(), 100);

        return response()
            ->json([
                'name' => $this->nameImage . $this->mimeSave,
                'companyImagePath' => $this->mainImageUploadPath->getPublicTmpCompanyImageViewPath()
            ]);
    }
    /**
     * Delete tmp product images
     * @param $src
     * @return void
     */
    public function deleteCompanyLogoImage($src)
    {
        $this->pathImage = $this->mainImageUploadPath->getTmpCompanyImageSavePath().$src;
        if(file_exists($this->pathImage))
        {
            unlink($this->pathImage);
        }
    }
    /**
     * Move company logo image after save in DB
     * @param $name
     * @return void
     */
    public function moveImage($name, $folder_id)
    {
        $this->pathImage = $this->mainImageUploadPath->getTmpCompanyImageSavePath().$name;
        $savePath = $this->mainImageUploadPath->getCompanyImageSavePath();
        if(file_exists($this->pathImage))
        {
            if(!file_exists($savePath.$folder_id))
            {
                mkdir($savePath.$folder_id);
            }

            if(file_exists($savePath.$folder_id))
            {
                if(!File::move($this->pathImage, $savePath.$folder_id.'/'.$name)) die("Couldn't rename file");
            }
        }
    }

    /**
     * Make ad images
     * @return \Illuminate\Http\JsonResponse
     */
    public function setAdImage()
    {
        /* Make thumb image */
        $this->pathImage = $this->mainImageUploadPath->getTmpThumbsAdImageSavePath();
        $this->mimeSave = '.jpg';
        Image::make($this->file)->widen(130)->save($this->renderImage(), 100);

        /* Make normal image */
        $this->pathImage = $this->mainImageUploadPath->getTmpNormalAdImageSavePath();
        $this->mimeSave = '.jpg';
        Image::make($this->file)->widen(800)->save($this->renderImage(), 100);

        return response()
            ->json([
                'name' => $this->nameImage . $this->mimeSave,
                'adTmpImagePath' => $this->mainImageUploadPath->getPublicTmpThumbsAdImageViewPath()
            ]);
    }

    /**
     * Delete ad images
     * @param src
     * @return void
     */
    public function deleteAdImages($src)
    {
        /* Delete thumb image */
        $this->pathImage = $this->mainImageUploadPath->getTmpThumbsAdImageSavePath().$src;
        if(file_exists($this->pathImage))
        {
            unlink($this->pathImage);
        }

        /* Delete normal image */
        $this->pathImage = $this->mainImageUploadPath->getTmpNormalAdImageSavePath().$src;
        if(file_exists($this->pathImage))
        {
            unlink($this->pathImage);
        }
    }
}