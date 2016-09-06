<?php

namespace App\Http\Controllers\XHR;

use App\Models\CatalogTree;
use App\Models\Category;
use App\Models\Industry;
use App\Models\MainCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getCatalogById(CatalogTree $catalogTree)
    {
        $catalogs = $catalogTree->getCatalogById($this->request->input('id'));

        return response()
            ->view('xhr.filter.products.catalog', ['lists' => $catalogs]);
    }

    public function getMainCatalogById(MainCategory $mainCategory, CatalogTree $catalogTree)
    {
        $mainIndustries = $mainCategory
            ->findOrFail($this->request->input('id'))
            ->industries()
            ->select('industry_id')
            ->orderBy('industry_id')
            ->get();
        //dd(count($mainIndustries));
        $index = [];
        foreach($mainIndustries as $ind){
            $index[] = $ind->industry_id;
        }
        //dd($index);
        $main = $catalogTree->whereIn('industry_id', $index)->where('parent_id', 0)->get();
        //dd($main);

        return response()
            ->view('xhr.filter.filter', ['lists' => $main]);
    }
}
