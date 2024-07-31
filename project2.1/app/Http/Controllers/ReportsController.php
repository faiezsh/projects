<?php 

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\Global_chat;
use App\Models\Reports;
use App\Models\User;
use Illuminate\Http\Request;

class ReportsController extends Controller 
{
  ###### add_report  ######
  public function add_report(Request $request)
  {
    $date = date('Y-m-d H:i:s');
    Reports::insert([
      'course_id'=>$request->course_id,
      'chat_id'=>$request->chat_id,
      'global_chat_id'=>$request->global_chat_id,
      'time'=>$date,
      'state'=>false
    ]);
  return response()->json('successfully repoted');
  }
  ###### view report  #######
  public function view_report(Request $request)
  {
    $q=User::where('id',$request->id)->value('id');
    if ($q==0)
    {
      return Reports::all();
    }
    return response()->json('cant view report');
  }

  ######  deleat_user  #######
  public function deleat_user(Request $request)
  {
    if ($request->state==true)
      {
        if ($request->course_id!=null)
        {
          $q=Courses::where('id',$request->course_id)->value('userid');
          $r=User::find($q);
          $r->delete();
          return response()->json('successfuly');
        }
        else  if($request->global_chat_id!=null)
        {
          $q=Global_chat::where('id',$request->global_chat_id)->value('userid');
          $r=User::find($q);
          $r->delete();
          return response()->json('successfuly');
        }
      
      }
  }

}

?>