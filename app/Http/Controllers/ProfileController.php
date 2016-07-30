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

        return view('profile.index')
            ->with('companies', $companies);
    }

    public function create()
    {

    }
}
