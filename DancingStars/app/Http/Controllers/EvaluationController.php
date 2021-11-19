<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\AssessmentController;
use DB;

class EvaluationController extends Controller
{
    
    public function index()
    {
     
     $data = DB::table('users')->get();

	 return view('evaluation',['data'=>$data]);
     //var_dump($data);
    }

}