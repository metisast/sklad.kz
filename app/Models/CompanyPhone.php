<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyPhone extends Model
{
    protected $fillable = ['company_id', 'name', 'description'];

    /* Queries */
    static public function createCompanyPhone($id, $phone_name, $description)
    {
        return parent::create([
            'company_id' => $id,
            'name' => $phone_name,
            'description' => $description
        ]);
    }

    static public function getPhonesByCompanyId($id)
    {
        return parent::where('company_id', '=', $id)->get();
    }
}
