<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produkController extends Controller{
   public function main(){
      return view('pageAdmin.master.produk.main');
   }

   public function form(Request $req){
      $content = view("pageAdmin.master.produk.form")->render();
      return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
   }
}
