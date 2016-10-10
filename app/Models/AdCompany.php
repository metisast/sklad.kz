<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdCompany extends Model
{
    protected $fillable = ['company_id', 'ad_id'];

    /* Queries */
    static public function createAdCompany($company_id, $ad_id)
    {
        parent::create([
            'company_id' => $company_id,
            'ad_id' => $ad_id
        ]);
    }
}
