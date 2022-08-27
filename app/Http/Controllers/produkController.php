<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
class produkController extends Controller{
   public function main(){
      return view('content.admin.master.produk.main');
   }

   public function form(Request $req){
      $data['kategori'] = Kategori::all();
      $data['kode'] = $this->kodeProduk();
      $content = view("content.admin.master.produk.form",$data)->render();
      return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
   }

   public function save(Request $request){
      return $request->all();
   }
}
