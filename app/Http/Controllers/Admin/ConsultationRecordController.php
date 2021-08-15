<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pi1;

class ConsultationRecordController extends Controller
{
    public function get_info($id)
    {
        $info = Pi1::where('id',$id)->first();
        db($info);
    }
}
