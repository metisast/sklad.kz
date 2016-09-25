<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyEmail extends Model
{
    protected $fillable = ['company_id', 'name', 'description'];

    /* Queries */
    static public function createCompanyEmail($id, $email_name, $description)
    {
        return parent::create([
            'company_id' => $id,
            'name' => $email_name,
            'description' => $description
        ]);
    }

    static public function getEmailByCompanyId($id)
    {
        return parent::where('company_id', '=', $id)->get();
    }
}
