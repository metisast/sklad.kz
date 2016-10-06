<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $fillable = ['title', 'industry_id', 'description', 'price', 'city_id', 'main_image', 'user_name', 'email', 'phone', 'status_publish_id', 'status_active_id', 'status_belong_id', 'ended'];

    /* Queries */
    public static function createAd($request)
    {
        return parent::create([
            'title' => $request->get('title'),
            'industry_id' => $request->get('industry_id'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'city_id' => $request->get('city_id'),
            'main_image' => $request->get('images')[0],
            'user_name' => $request->get('user_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'status_publish_id' => 1,
            'status_active_id' => 1,
            'status_belong_id' => 1,
            'ended' => Carbon::now()->addDay(14),
        ]);
    }
}
