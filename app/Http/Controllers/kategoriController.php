<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use DataTables, Validator;


class kategoriController extends Controller{
   private $base = 'content.admin.master.kategori.';
   public function main(){
      return view($this->base.'main');
   }

   public function form(Request $request){
      $data['kode'] = $this->kodeKategori();
      $content = view($this->base.'form',$data)->render();
      return ['status'=>'success','message'=>'berhasil mengambil data','data'=>$content];
   }

   public function getKategori(Request $request){
      if(request()->ajax()){
         $data = Kategori::all();
         return DataTables::of($data)
            ->addIndexColumn()
            // ->addColumn()
            ->make(true);
      }
   }

   public function save(Request $request){
      $rules = [
         'kodeKategori' => 'required',
         'namaKategori' => 'required',
      ];

      $messages = [
         'required' => 'Kolom Harus Diisi',
      ];

      $validator = Validator::make($request->all(),$rules,$messages);
      if(!$validator->fails()){
         $kategori = new Kategori;
         $kategori->kode_kategori = $request->kodeKategori;
         $kategori->nama_kategori = $request->namaKategori;
         $kategori->save();
         if($kategori){
            return ['status'=>'success','message'=>'Data berhasil disimpan!'];
         }else{
            return ['status'=>'error','message'=>'Data gagal disimpan!'];
         }
      }else{
         return $validator->messages();
      }
   }
}