<?php

/**
 * Image manipulation Main class
 */
class MainImage
{
    protected $tmpCompanyImageSavePath;
    protected $companyImagePath;

    protected function getTmpCompanyImageSavePath()
    {
        return $this->tmpCompanyImageSavePath = public_path().'/static/tmp/company/';
    }

    protected function getCompanyImageSavePath()
    {
        return $this->companyImagePath = public_path().'/static/company/';
    }
}