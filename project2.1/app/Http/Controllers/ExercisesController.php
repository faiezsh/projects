<?php 

namespace App\Http\Controllers;

use App\Models\Exercises;
use Illuminate\Http\Request;

class ExercisesController extends Controller 
{  
   public function add_Exercises(Request $request)
   {
     Exercises::insert(
      [
       'question'=>$request->question,
       'course_id'=>$request->course_id
      ]
      );
      
      Exercises_answerController::add_Exercises_answer($request);
      return true;
   }
}
?>