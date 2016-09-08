<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainCategory extends Model
{
    /* Relation: belongs to many  industry*/
    public function industries()
    {
        return $this->belongsToMany('App\Models\Industry');
    }

    /* Queries */
    public function getMainCategories()
    {
        return parent::all();
    }

    public function getMainCategoriesByCount($i)
    {
        return parent::limit($i)->get();
    }

    public static function getAllIndustriesByMainCategoryId($id)
    {
        return parent::findOrFail($id)->industries()->get();
    }
}
