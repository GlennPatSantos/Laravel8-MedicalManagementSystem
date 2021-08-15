<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
        protected $connection = 'pis';
        protected $table = 'departments';
       
public function Unit()
{
        return $this->hasOne('App\Units','id','unit_id');
}
}

