<?php

namespace App\Http\Controllers;

use App\Models\Certificates;
use App\Models\User;
use Illuminate\Http\Request;

class CertificatesController extends Controller
{
  #####  Add Certificate   ######
  public function addcertificate(Request $request)
  {
    try{

      $cont = Certificates::where('userid', $request->userid)->count();
      $user = User::where('id', $request->userid)->first();
      if ($user['roll'] == 2) {
        $newrate = (($cont - 1) * $user['rate'] + $request->mark) / $cont;
        $user = User::where('id', $request->userid)->update([
          'rate' => $newrate
        ]);
      }
      Certificates::insert([
        'word' => $request->word,
        'userid' => $request->userid
      ]);
    }catch(\Exception $e)
    {
      return response()->json('error');
    }
    return response()->json(['good a certificate',$request->word]);
  }
  #####  View certificate  ######
  public function view_certificates (Request $request)
  {
    try{
      $r=Certificates::where('userid', $request->userid)->get('word');
    }catch(\Exception $e)
    {
      return response()->json('error');
    }
    return response()->json(['certificat'=>$r]);
  }
}
