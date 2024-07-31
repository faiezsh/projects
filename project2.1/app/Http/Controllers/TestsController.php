<?php 

namespace App\Http\Controllers;


use App\Models\Test_answers;
use App\Models\Test_choises;
use App\Models\Tests;
use Illuminate\Http\Request;


class TestsController extends Controller 
{
  #####  View question  #####
  public function question(Request $request)
  {
    $h=collect();
    $id=KeywordsController::searchfortest($request->word);
    while ($id!=null)
    {
      $question=Tests::where('id',$id)->first();
      $choose_answer=Test_choises::where('testid',$question->id)->get('test_answer_id');
      $answer=Test_answers::whereIn('id',$choose_answer)->get('description');
      $correct=Test_answers::whereIn('id',$choose_answer)->get('correct');
      $h->push(['question'=>$question->question, 'answer'=>$answer,'correct'=>$correct]);
      $id=$question->next_question_id;
  }
  return response()->json($h);
}

}
