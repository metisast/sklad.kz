<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyStatusActivity extends Model
{
    /* Relation has many to companies*/
    public function companies()
    {
        return $this->hasMany('App\Models\Company');
    }
}
