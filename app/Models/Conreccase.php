<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conreccase extends Model
{
   
    public function Subcase()
{
        return $this->hasOne('App\subcase','id','sub_case_id');
}
    public function consultationRecords()
{
        return $this->hasOne('App\consultationRecords','id','consultation_record');
}
}
