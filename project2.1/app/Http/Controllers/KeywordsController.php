<?php

namespace App\Http\Controllers;

use App\Models\Keywords;
use Illuminate\Http\Request;

class KeywordsController extends Controller
{
  public function getbycategory(Request $request)
  {
    $keywords = Keywords::where('categoryid', $request->id)->where('formal', 1)->get();
    return response()->json(['keyword' => $keywords]);
  }

  public static function searchbyword($request)
  {
    $keywords = Keywords::join('course_word', function ($join) use ($request) {
      $join->on('keywords.id', '=', 'course_word.keyword_id')
        ->where('keywords.word', $request);
    })->select('course_word.course_id');
    return $keywords;
  }

  public static function searchfortest($request)
  {
    $test = Keywords::where('word', $request)->first();
    return $test['testid'];
  }
}
