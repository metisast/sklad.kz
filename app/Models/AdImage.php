<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdImage extends Model
{
    protected $fillable = ['ad_id', 'name', 'main'];

    /* Queries */
    static public function createAdImage($ad_id, $images)
    {
        for($i = 0; $i < count($images); $i++)
        {
            if($i == 0)
            {
                parent::create([
                    'ad_id' => $ad_id,
                    'name' => $images[$i],
                    'main' => 1
                ]);
            }
            else{
                parent::create([
                    'ad_id' => $ad_id,
                    'name' => $images[$i]
                ]);
            }
        }

    }
}
