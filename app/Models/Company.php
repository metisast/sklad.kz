<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model
{
    protected $fillable = ['user_id', 'short_name', 'opf_id', 'name', 'slogan', 'logo', 'city_id', 'description', 'status_publish_id', 'status_activate_id'];

    /* Relation belong to opfs */
    public function opf()
    {
        return $this->belongsTo('App\Models\Opf');
    }

    /* Relation belong to company activities */
    public function companyActivities()
    {
        return $this->belongsTo('App\Models\CompanyStatusActivity', 'status_activate_id');
    }

    /* Relation belong to company activities */
    public function city()
    {
        return $this->belongsTo('App\Models\RegionsCity');
    }

    /* Queries */
    public function createCompany($request)
    {
        return parent::create([
            'user_id' => Auth::user()->id,
            'opf_id' => $request->opf_id,
            'name' => $request->name,
            'slogan' => $request->slogan,
            'logo' => $request->company_logo,
            'city_id' => $request->cities,
            'description' => $request->description,
            'status_publish_id' => 1, // added
            'status_activate_id' => 2 // disabled
        ]);
    }

    public function getCompaniesByUser()
    {
        return parent::where('user_id', '=', Auth::user()->id)->get();
    }

    static public function getCompanyByUser($id)
    {
        return parent::where('id', '=', $id)->firstOrFail();
    }

    static public function getActiveCompaniesByUserId()
    {
        return parent::where([
            ['user_id', '=', Auth::user()->id],
            ['status_publish_id', '=', 2],
            ['status_activate_id', '=', 1]
        ])->get();
    }
}