<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\AdCompany;
use App\Models\AdImage;
use App\Models\AdUser;
use App\Models\Category;
use App\Models\Industry;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Region;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
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
     *
     * @param MainCategory $mainCategory
     * @return \Illuminate\Http\Response
     */
    public function create(Industry $industry, Region $region)
    {
        $industries = $industry->getIndustries();
        $regions = $region->getAllRegions();

        return view('ad.create', [
            'industries' => $industries,
            'regions' => $regions,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Requests\AdPublishRequest $adPublishRequest
     * @return \Illuminate\Http\Response
     */
    public function store(Ad $ad, Requests\AdPublishRequest $adPublishRequest, AdUser $adUser,  AdCompany $adCompany, AdImage $adImage)
    {
        //dd($this->request->all());

        /* ad publish */
        $ad = $ad->createAd($this->request);

        /* Create relations for ad publish */
        if($this->request->get('ad_relation') == 1)
        {
            $adUser->createAdUser($ad->id);
        }
        elseif($this->request->get('ad_relation') == 2)
        {
            $adCompany->createAdCompany($this->request->get('company_id'), $ad->id);
        }

        /* Create ad images */
        if(count($this->request->get('images')) > 0)
        {
            /* Move image */
            $image  = new \Images();
            $image->moveAdImage($this->request->get('images'), $ad->id);

            /* Create images */
            $adImage->createAdImage($ad->id, $this->request->get('images'));
        }

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
    public function show($id)
    {
        //
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
