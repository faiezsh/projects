<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CommentsController extends Controller
{
    ###### Add comment  #####
    public function add_comment(Request $request)
    {
        try{
            $date = date('Y-m-d H:i:s');
            Comments::insert([
                'userid' => $request->userid,
                'global_chat_id' => $request->global_chat_id,
                'content' => $request->content,
                'time' => $date,
                'like_count' => 1
            ]);
            if ($request->category != null) {
                $path = $request->file('path');
                $filename = time().$path->getClientOriginalName();
                Storage::disk('public')->put($filename, File::get($path));
                $t=$request->path->getClientMimeType();
                $q = Comments::where('global_chat_id', $request->global_chat_id)->where('userid', $request->userid)->value('id');
                Comment_categoryController::add_comment_category($q, $path,$t);
                Comments::updated(
                    ['category' => $request->category]
                    );
                }
            }catch(\Exception $e)
            {
                return response(['error' .$e]);
            }
            return response('true');
            }
    #######   view coment   ######
    public function view_comment(Request $request){
        try{
            $re = Comments::where('global_chat_id', $request->global_chat_id)->get('category');
            if ($re != null) {
                $q = Comments::where('global_chat_id', $request->global_chat_id)->get('content');
                $t = Comments::where('global_chat_id', $request->global_chat_id)->value('id');
                $r = Comment_categoryController::view_gategory($t);
                return response()->json([$q, $r]);
                }
            $q = Comments::where('global_chat_id', $request->global_chat_id)->get('content');
            }catch(\Exception){
            return response('error');
            }
        return response()->json($q);
        }

}
