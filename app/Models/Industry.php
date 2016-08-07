<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    /* Relation: belongs to many  main categories*/
    public function mainCategories()
    {
        return $this->belongsToMany('App\Models\MainCategories');
    }

    /* Relation: belongs to many categories*/
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
