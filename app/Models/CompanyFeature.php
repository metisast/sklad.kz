<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyFeature extends Model
{
    protected $fillable = ['company_id', 'industry_id'];

    /* Queries */
    static public function createCompanyFeatures($company_id, $industry_id)
    {
        return parent::create([
            'company_id' => $company_id,
            'industry_id' => $industry_id
        ]);
    }
}
