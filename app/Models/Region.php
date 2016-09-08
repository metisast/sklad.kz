<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /* Relation belong to cities */
    public function cities()
    {
        return $this->hasMany('App\Models\RegionsCity');
    }

    /* Queries */
    public static function getAllRegions()
    {
        return self::select('id', 'name')->get();
    }

    public static function getAllCitiesByRegionId($region_id)
    {
        return parent::findOrFail($region_id)-> cities;
    }
}
