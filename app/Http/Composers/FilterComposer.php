<?php

namespace App\Http\Composers;

use App\Models\MainCategory;
use Illuminate\Contracts\View\View;

class FilterComposer{
    /**
     *  Filter composer view
     */
    protected $main_categories;

    public function __construct(MainCategory $mainCategory)
    {
        $this->main_categories = $mainCategory;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $view->with('main_categories', $this->main_categories->getMainCategories());
    }
}