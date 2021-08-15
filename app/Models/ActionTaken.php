<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActionTaken extends Model
{
    public function consultationRecord()
    {
        return $this->hasOne('App\consultationRecord','id','consultation_rec_id');
    }
}
