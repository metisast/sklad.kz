<?php

namespace App\Http\Controllers\XHR;

use App\Models\MainCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    public function getCompanyFeatures(MainCategory $mainCategory)
    {

        return response()
            ->view('xhr.company_features.index',[
                'mainCategories' => $mainCategory->getMainCategoriesByCount(3)
            ]);
    }
}
