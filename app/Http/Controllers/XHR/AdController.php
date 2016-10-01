<?php

namespace App\Http\Controllers\XHR;

use App\Models\CatalogTree;
use App\Models\MainCategory;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function showModal()
    {
        return response()
            ->view('xhr.ad.index');
    }

    public function getIndustriesByMainCatalog(MainCategory $mainCategory, CatalogTree $catalogTree)
    {
        $mainIndustries = $mainCategory
            ->findOrFail($this->request->input('id'))
            ->industries()
            ->select('industry_id')
            ->orderBy('industry_id')
            ->get();
        /*dd($mainIndustries);*/

        $index = [];
        foreach($mainIndustries as $ind){
            $index[] = $ind->industry_id;
        }
        //dd($index);
        $main = $catalogTree->whereIn('industry_id', $index)->where('parent_id', 0)->get();
        //dd($main);

        return response()
            ->view('xhr.ad.heading-list-group',[
                'lists' => $main,
                'listTitle' => $this->request->get('listTitle')
            ]);
    }

    public function getCatalogByParentId(CatalogTree $catalogTree)
    {
        $catalogs = $catalogTree->getCatalogById($this->request->input('parent_id'));

        if(count($catalogs) > 0)
        {
            return response()
                ->view('xhr.ad.heading-list-group', [
                    'lists' => $catalogs,
                    'listTitle' => $this->request->get('listTitle')
                ]);
        }
        else
        {
            return response()
                ->json(['status' => 'end']);
        }


    }
}
