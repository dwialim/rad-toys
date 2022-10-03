<?php

namespace App\Http\Controllers\landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class landingController extends Controller{
   public function main(){
      return view('content.landing.main');
   }
}