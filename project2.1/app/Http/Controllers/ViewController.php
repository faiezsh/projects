<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use App\Models\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
  public function view(Request $request)
  {
    $view = View::where('userid', $request->id)->get('course_id');
    $cores_view = Courses::whereIn('id', $view)->get();
    return response()->json($cores_view);
  }
}
