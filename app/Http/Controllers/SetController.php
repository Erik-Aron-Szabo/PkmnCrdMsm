<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SetController extends Controller
{
  
  public function showSet(Request $request)
  {
    $code = $request->path();
    

    return view('sets')->with('code', $code);
  }
}
