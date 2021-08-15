<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcase extends Model
{
    public function Cases()
    {
        return $this->hasOne('App\Subcase','id','case_id');
    }
}
