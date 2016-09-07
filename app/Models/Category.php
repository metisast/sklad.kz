<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    /* Relation: belongs to many categories*/
    public function industries()
    {
        return $this->belongsToMany('App\Models\Industry');
    }

    /* Relation: belongs to many products*/
    public function products()
    {
        return $this->belongsToMany('App\Models\Product');
    }

    /* Queries */
    public function getCategories()
    {
        return parent::all();
    }
}
