<?php 

namespace App\Http\Controllers;

use App\Models\Comment_category;
use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class Comment_categoryController extends Controller 
{
  ###### Add Comment category  #######
  public static function add_comment_category($comment_id,$path,$t)
  {
    
    Comment_category::insert(
        [
        'comment_id'=>$comment_id,
        'path'=>$path,
        'type'=>$t
        ]
        );
  }
  ######  view comment category  ######
  public static function view_gategory($request)
  {
    $q=Comment_category::where('comment_id',$request)->get();
    return response()->json($q);
    
  }
    ######   dawonloud file  ######
  public  function dawonlouds ($filename,$type)
  {
    $file = Storage::disk('public')->get($filename);
    if ($file != null){
      return (new Response($file, 200))->header('Content-Type', $type);
      } 
    else {
      return response()->json(['message' => 'not found file...']);
      }
    }
}

?>