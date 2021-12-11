<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
//use App\Models\AssessmentController;
use DB;

class EvaluationController extends Controller
{
    //competi_id toq parametar vzima ot bazata danni vzima vsichki koito sa se zapisali za nego
  //$selectedDancer_id ako ne e cuknato ne vijdash formata i za tova e null
    public function index($competition_id, $selectedDancer_id = null)
    {
     //samo  zapisani za tekushtiq konckurs
     $dancers = DB::table('competitions_dancers')
     ->select('users.name',
        'competitions_dancers.dancer_id',
        'rhythm',
        'energy',
        'presentation' ,
        'evaluation.judge_id',
        'competitions_dancers.competition_id'
    )
     ->leftJoin('evaluation', 'evaluation.dancer_id', '=', 'competitions_dancers.dancer_id')
     ->leftJoin('users', 'users.id', '=', 'competitions_dancers.dancer_id')
     ->where([
        'competitions_dancers.competition_id' => $competition_id 

    ])
     //dai mi ocenkite ot tozi konkurs
     ->get();
     //polochavam edna golqma tablica s mnogo koloni i kazvam v selecta koi iskam da vijdam 
     return view('evaluation',['dancers'=>$dancers, 'selectedDancer_id' => $selectedDancer_id ]);
     
    }

     public function create($competition_id, $dancer_id)
    {
      
      $errorCounter = 0;
      $status = 'okay';
      $rhythm = $_GET['rhythm'] ;
      $energy = $_GET['energy'];
      $presentation = $_GET['presentation'];
      if ($rhythm == 1 || $rhythm == 10) {
        $errorCounter++;
          
      }

      if ($energy == 1 || $energy == 10) {
        $errorCounter++;
          
      }

      if ($presentation == 1 || $presentation == 10) {
        $errorCounter++;
          
      }

      if ($errorCounter >= 2) {
            $status = 'not okay';
      }

        DB::table('evaluation')->insert([
            'competition_id' => $competition_id,
            'dancer_id' => $dancer_id,
            'judge_id' => Auth::user()->id,
            'rhythm' =>  $rhythm,
            'energy' =>   $energy,
            'presentation' => $presentation,
            'status' => $status,

        ]);

        return redirect()->route('evaluation', [$competition_id]);
    }


}
