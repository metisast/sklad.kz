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
        $test = $this->main_categories->find(1)->industries()->get();
        //dd($test[0]->name);
        $view
            ->with('main_categories', $this->main_categories->getMainCategories())
            ->with('test', $test);
    }
}