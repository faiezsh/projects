<?php 

namespace App\Http\Controllers;

use App\Models\Exercises_answer;
use Illuminate\Http\Request;

class Exercises_answerController extends Controller 
{
   public static function add_Exercises_answer(Request $request)
   {
    Exercises_answer::insert(
      [
       'description'=>$request->description,
       'correct'=>$request->correct
      ]
      );
      Exercises_choiceController::add_Exercises_choice($request);
   }
}

?>