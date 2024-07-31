<?php 

namespace App\Http\Controllers;

use App\Models\Contents;
use App\Models\Course_word;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller 
{
  #####  Add Course  #####
  public function addcourse(Request $request)
  {
    try{
      $date = date('Y-m-d H:i:s');
      Courses::insert([
        'name'=>$request->name,
        'userid'=>$request->userid,
        'time'=>$date
      ]);
    }catch(\Exception $e){
    return response()->json('error');
    }
  }

  #####  get course  ######
  public function getcourse(Request $request)
  {
    try{
      $id=KeywordsController:: searchbyword($request->word);
      $course=Courses::whereIn('id',$id)->get();
      return response()->json($course);
    }catch(\Exception $e){
      return response()->json('error');
    }
  }
  ##### get courses by id #####
  public function coursebyid(Request $request)
  {
    try{
      $id=Courses::where('userid',$request->id)->get();
      return response()->json($id);
    }catch(\Exception $e){
      return response()->json('error');
    }
  }
  ##### get course by keyword_id  #####
  public function get_course(Request $request)
  {
    try{

      $r=Course_word::where('keyword_id',$request->id)->get('course_id');
      $q=Contents::whereIn('course_id',$r)->get();
      return response()->json(['course'=>$q]);
    }catch(\Exception $e){
      return response()->json('error');
    }
  }
}
