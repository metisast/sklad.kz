<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class AdUser extends Model
{
    protected $fillable = ['user_id', 'ad_id'];

    /* Queries */
    static public function createAdUser($id)
    {
        parent::create([
            'user_id' => Auth::user()->id,
            'ad_id' => $id
        ]);
    }

}
