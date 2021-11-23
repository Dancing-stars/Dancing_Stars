<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
//use App\Models\AssessmentController;
use DB;

class EvaluationController extends Controller
{
    
    public function index($competition_id)
    {
     //var_dump($competition_id);
     //samo  zapisani za tekushtiq konckurs
     $dancers = DB::table('evaluation')

     ->join('users', 'users.id', '=', 'evaluation.dancer_id')
     ->where(['competition_id' => $competition_id])
     ->get();

     return view('evaluation',['dancers'=>$dancers]);
     // echo "<pre>";
     // var_dump($evaluation);
     // echo "</pre>";

    }

}

// DB::table('users')
// ->select('users.id','users.name','profiles.photo')
// ->join('profiles','profiles.id','=','users.id')
// ->where(['something' => 'something', 'otherThing' => 'otherThing'])
// ->get();