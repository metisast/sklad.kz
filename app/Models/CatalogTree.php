<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogTree extends Model
{
    /* Relation: belongs to many  industries */
    public function industry()
    {
        return $this->belongsTo('App\Models\Industry');
    }

    /* Queries */
    public static function getAllIndustries()
    {
        return parent::where('parent_id', '=', 0)->get();
    }
    public static function getCatalogById($id)
    {
        return parent::where([
            ['parent_id','!=', 0],
            ['parent_id', $id],
        ])->get();
    }
}
