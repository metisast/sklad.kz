<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Opf extends Model
{
    public function getAllOpfs()
    {
        return parent::all();
    }
}
