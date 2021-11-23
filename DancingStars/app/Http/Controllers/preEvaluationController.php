<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\AssessmentController;
use DB;

class preEvaluationController extends Controller
{
    public function index(){

    
    $competitions = DB::table('competitions')->select('competiotion_name','competition_id')->get();
    return view('preEvaluation',['competitions'=>$competitions]);
    
   
   }

 }


// where clause
// start date po-malka ot tekushtata 
// end date po-golqma ot tekushtata 