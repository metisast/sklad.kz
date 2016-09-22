<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Company $company)
    {
        $companies = $company->getCompaniesByUser();
        $companyLogoImagePath = new \MainImageUpload();

        return view('profile.index', [
            'companies' => $companies,
            'companyLogoImagePath' => $companyLogoImagePath->getCompanyImageViewPath()
        ]);
    }

    public function create()
    {

    }
}
