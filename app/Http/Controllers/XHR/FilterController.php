<?php

namespace App\Http\Controllers\XHR;

use App\Models\CatalogTree;
use App\Models\Category;
use App\Models\Industry;
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
}
