<?php

namespace App\Http\Controllers;

use App\Models\Contents;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ContentsController extends Controller
{

  public function add(Request $request)
  {
    try {
      $data = $request->validate([
        'course_id' => 'required|integer',
        'type' => 'required',
        'path' => 'required|file|nullable'
      ]);

      $path = $request->file('path');
      $filename = time().$path->getClientOriginalName();
      Storage::disk('public')->put($filename, File::get($path));
      Contents::insert([
        'course_id' => $data['course_id'],
        'type' => $data['type'],
        'path' => $filename,
        'typeFile' => $request->path->getClientMimeType()
      ]);
    } catch (\Exception $e) {
      return response('error');
    }
    $d=$request->path->getClientMimeType();
    return response()->json([
      'course_id' => $data['course_id'],
      'type' => $data['type'],
      'path' => $filename,
      'typeFile' => $d
    ]);
  }
  ######  get content  #######
  public function get_contant(Request $request)
  {
    try {

      $q = Contents::where('course_id', $request->course_id)->get();
    } catch (\Exception $e) {
      return response('error');
    }
    return response()->json($q);
  }
  ######   dawonloud file  ######
  public  function dawonlouds ($filename)
  {
  $request=contents::where('id',$filename)->first();
  $file = Storage::disk('public')->get($request->path);
  if ($file != null){
    return (new Response($file, 200))->header('Content-Type', $request->typeFile);
    } 
  else {
    return response()->json(['message' => 'not found file...']);
    }
  }
}


