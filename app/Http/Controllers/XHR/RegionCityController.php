<?php

namespace App\Http\Controllers\XHR;

use App\Models\Region;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegionCityController extends Controller
{
    public function getCitiesByRegionId(Request $request, Region $region)
    {
        $region_id = $request->input('region_id');
        return response()
            ->view('xhr.forms.options',[
                'first_option' => 'Выберите город',
                'lists' => $region::getAllCitiesByRegionId($region_id)
            ]);
    }
}
