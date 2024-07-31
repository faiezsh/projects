<?php 

namespace App\Http\Controllers;


use App\Models\Global_chat;
use App\Models\User;
use Illuminate\Http\Request;

class Global_chatController extends Controller 
{
  ######  add_chat   ######
  public function add_chat(Request $request)
  {
    try{
      $date=date('Y-m-d H:i:s');
      Global_chat::insert([
        'userid'=>$request->userid,
        'content'=>$request->content,
        'time'=>$date
      ]);
    }catch(\Exception $e)
    {
      return response('error');
    }
    return response()->json($request->content);
  }
  ######  view_chat_globel   ######
  public function view_chat_globel()
  {
    $q=Global_chat::all();
    return response()->json($q);
  }
  #####  view chat report ######
  public function view_chat_report(Request $request)
  {
    $r=User::where('id',$request->userid)->first();
    if ($r->roll==0)
    {
      $q=Global_chat::where('id',$request->id)->value('content');
      return response()->json(['content is'=>$q]);
    }
    else
    {
      return response()->json('error the user is not admin');
    }
  }
  
}

?>