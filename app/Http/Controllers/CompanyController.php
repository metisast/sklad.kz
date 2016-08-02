<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Opf;
use Illuminate\Http\Request;

use App\Http\Requests;

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
    public function create(Opf $opf)
    {
        $opfs = $opf->getAllOpfs();

        return view('company.create')
            ->with('opfs', $opfs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Requests\CompaniesPublishRequest $cpr
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Requests\CompaniesPublishRequest $cpr)
    {
        //dd($request->all());
        $create = $this->company->createCompany($request);

        return redirect(route('company.show',  $create->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('company.show')
            ->with('company', $this->company->getCompanyByUser($id));
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
