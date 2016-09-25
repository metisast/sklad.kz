<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyFeature extends Model
{
    protected $fillable = ['company_id', 'industry_id'];

    /* Relation belong to industries */
    public function industries()
    {
        return $this->belongsTo('App\Models\Industry', 'industry_id');
    }

    /* Queries */
    static public function createCompanyFeatures($company_id, $industry_id)
    {
        return parent::create([
            'company_id' => $company_id,
            'industry_id' => $industry_id
        ]);
    }

    static  public function getFeaturesByCompanyId($id)
    {
        return parent::where('company_id', '=', $id)->get();
    }
}
