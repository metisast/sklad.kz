<?php

namespace App\Http\Controllers\XHR;

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

    public function getIndustry()
    {
        return response()->view('xhr.filter.products.categories');
    }

    public function getCategoryByIndustry(Industry $industry)
    {
        $categories = $industry->find($this->request->input('ind_id'))->categories()->get();

        return response()
            ->view('xhr.filter.products.categories', ['categories' => $categories]);
    }

    public function getProductCatByCategory(Category $category)
    {
        $productTypes = $category->find($this->request->input('cat_id'))->products()->get();

        return response()
            ->view('xhr.filter.products.productType', ['productTypes' => $productTypes]);
    }
}
