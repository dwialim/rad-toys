<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller{
   public function main(){
      return view('pageLanding.main');
   }
}