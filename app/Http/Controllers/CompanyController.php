<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\CompanyAddress;
use App\Models\CompanyEmail;
use App\Models\CompanyFeature;
use App\Models\CompanyPhone;
use App\Models\CompanySite;
use App\Models\Opf;
use App\Models\Region;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Gate;

class CompanyController extends Controller
{
    protected $company;
    
    public function __construct(Company $company)
    {
        $this->company = $company;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param Opf $opf
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Opf $opf, Region $region)
    {

        return view('company.create',[
            'opfs' => $opf->getAllOpfs(),
            'regions' => $region::getAllRegions()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Requests\CompaniesPublishRequest $cpr
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Requests\CompaniesPublishRequest $cpr, CompanyPhone $companyPhone, CompanyEmail $companyEmail, CompanySite $companySite, CompanyAddress $companyAddress, CompanyFeature $companyFeature)
    {
        //dd($request->all());

        $create = $this->company->createCompany($request);

        /* Create features */
        $arr_feat = explode(',', $request->get('features'));
        for($i = 0; $i < count($arr_feat); $i++)
        {
            $companyFeature::createCompanyFeatures($create->id, $arr_feat[$i]);
        }

        /* Move image after save */
        if(isset($request->images))
        {
            $image = new \Images();
            $image->moveImage($request->get('images')[0], $create->id);
        }

        $companyPhone::createCompanyPhone($create->id, $request->get('phone'), $request->get('phone_description'));
        $companyEmail::createCompanyEmail($create->id, $request->get('email'), $request->get('email_description'));
        if($request->get('web_site') != '') $companySite::createCompanySite($create->id, $request->get('web_site'), $request->get('web_site_description'));
        $companyAddress::createCompanyAddress($create->id, $request->get('address'), $request->get('address_description'));

        return response()->json([
            'success'
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, CompanyFeature $companyFeature, \MainImageUpload $logoPath, CompanyPhone $companyPhone, CompanyEmail $companyEmail, CompanySite $companySite, CompanyAddress $companyAddress)
    {
        $company = $this->company->getCompanyByUser($id);

        /* Check permission */
        $this->authorize('showCompany', $company);

        $features = $companyFeature->getFeaturesByCompanyId($company->id);
        $logoPath = $logoPath->getCompanyImageViewPath();
        $phones = $companyPhone->getPhonesByCompanyId($company->id);
        $emails = $companyEmail->getEmailByCompanyId($company->id);
        $sites = $companySite->getSitesByCompanyId($company->id);
        $addresses = $companyAddress->getAddressesByCompanyId($company->id);

        return view('company.show', [
            'company' => $company,
            'features' => $features,
            'logoPath' => $logoPath,
            'phones' => $phones,
            'emails' => $emails,
            'sites' => $sites,
            'addresses' => $addresses
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
