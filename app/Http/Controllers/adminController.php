<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller{
    public function main(){
        return view("pageAdmin.dashboard.main");
    }
}
