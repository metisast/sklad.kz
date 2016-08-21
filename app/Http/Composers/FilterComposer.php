<?php

namespace App\Http\Composers;

use App\Models\CatalogTree;
use App\Models\MainCategory;
use Illuminate\Contracts\View\View;

class FilterComposer{
    /**
     *  Filter composer view
     */
    protected $main_categories;
    protected $catalogs;

    public function __construct(MainCategory $mainCategory, CatalogTree $catalogTree)
    {
        $this->main_categories = $mainCategory;
        $this->catalogs = $catalogTree;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $industries = $this->catalogs->getAllIndustries();
        $view
            ->with('main_categories', $this->main_categories->getMainCategories())
            ->with('industries', $industries);
    }
}