<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CatalogTree extends Model
{
    public static function getAllIndustries()
    {
        return parent::where('parent_id', '=', 0)->orderBy('name')->get();
    }
    public static function getCatalogById($id)
    {
        return parent::where('parent_id', '=', $id)->orderBy('name')->get();
    }
}
