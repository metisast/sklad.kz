<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /* Relation: belongs to many categories*/
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
