<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    /* Relation: has many to trees*/
    public function catalogTree()
    {
        return $this->hasMany('App\Models\CatalogTree');
    }

    /* Relation: belongs to many  Main category*/
    public function mainCategories()
    {
        return $this->belongsToMany('App\Models\MainCategory');
    }

    /* Queries */
    public function getIndustries()
    {
        return parent::all();
    }
}
