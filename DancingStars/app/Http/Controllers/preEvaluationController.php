<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\AssessmentController;
use DB;

class preEvaluationController extends Controller
{
    public function index(){

    $now = date('Y-m-d');

    $competitions = DB::table('competitions')
    ->select('competition_name','competition_id')
    ->where([
    ['start_date', '<', $now],
    ['end_date', '>=', $now],
	])->get();
    

    return view('preEvaluation',['competitions'=>$competitions]);
    
   }

 }
 //na tazi stranica pokazvame tekushtite konkursi