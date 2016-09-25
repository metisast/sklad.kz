<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAddress extends Model
{
    protected $fillable = ['company_id', 'name', 'description'];

    /* Queries */
    static public function createCompanyAddress($id, $address_name, $description)
    {
        return parent::create([
            'company_id' => $id,
            'name' => $address_name,
            'description' => $description
        ]);
    }

    static public function getAddressesByCompanyId($id)
    {
        return parent::where('company_id', '=', $id)->get();
    }
}
