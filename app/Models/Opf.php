<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opf extends Model
{
    /* Relation has many to companies*/
    public function companies()
    {
        return $this->hasMany('App\Models\Company');
    }

    /* Queries */
    public function getAllOpfs()
    {
        return parent::all();
    }
}
