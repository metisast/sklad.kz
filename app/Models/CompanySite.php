<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanySite extends Model
{
    protected $fillable = ['company_id', 'name', 'description'];

    /* Queries */
    static public function createCompanySite($id, $site_name, $description)
    {
        return parent::create([
            'company_id' => $id,
            'name' => $site_name,
            'description' => $description
        ]);
    }

    static public function getSitesByCompanyId($id)
    {
        return parent::where('company_id', '=', $id)->get();
    }
}
