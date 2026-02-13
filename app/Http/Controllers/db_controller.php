<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class db_controller extends Controller
{
    function students(){
        $data = DB::table('students')->get();
        return view('students.index', ['data'=>$data]);
    }
}
