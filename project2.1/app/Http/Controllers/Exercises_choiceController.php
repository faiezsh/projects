<?php 

namespace App\Http\Controllers;

use App\Models\Exercises;
use App\Models\Exercises_answer;
use App\Models\Exercises_choice;
use Illuminate\Http\Request;

class Exercises_choiceController extends Controller 
{
   public static function add_Exercises_choice (Request $request)
   {
    $q=Exercises::where('course_id',$request->course_id)->value('id');
    $r=Exercises_answer::where('description',$request->description)->where('correct',$request->correct)->value('id');
    Exercises_choice::insert(
      [
       'answer_id'=>$r,
       'exercises_id'=>$q
      ]
      );
   }
}

?>