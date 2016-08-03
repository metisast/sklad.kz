<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Company extends Model
{
    protected $fillable = ['user_id', 'short_name', 'opf_id', 'name'];

    /* Relation belong to opfs */
    public function opf()
    {
        return $this->belongsTo('App\Models\Opf');
    }

    /* Queries */
    public function createCompany($request)
    {
        return parent::create([
            'user_id' => Auth::user()->id,
            'short_name' => $request->short_name,
            'opf_id' => $request->opf_id,
            'name' => $request->name
        ]);
    }

    public function getCompaniesByUser()
    {
        return parent::where('user_id', '=', Auth::user()->id)->get();
    }

    public function getCompanyByUser($id)
    {
        return parent::where('id', '=', $id)->firstOrFail();
    }
}