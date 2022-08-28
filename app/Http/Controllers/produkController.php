<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produk;
use App\Models\Kategori;
use DataTables, Validator;

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
      $rules = [
         'hargaProduk' => 'required',
         'qtyProduk' => 'required',
         'image' => 'image|file|mimes:jpeg,jpg,png|max:2048',
         'kategoriProduk' => 'required',
         'namaProduk' => 'required',
      ];
      $messages = [
         'required' => 'Kolom Harus Diisi!',
      ];
      $validator = Validator::make($request->all(),$rules,$messages);

      if(!$validator->fails()){
         $image = $request->file('image');

         $produk = new Produk;
         $produk->kategori_id = $request->kategoriProduk;
         $produk->kode_barang = $request->kodeProduk;
         $produk->nama_barang = $request->namaProduk;
         if(!empty($image)){
            $path = $image->store('produk-image');
            $produk->foto = $path;
         }
         $produk->qty         = $request->qtyProduk;
         $produk->harga       = preg_replace("/\D+/", "", $request->hargaProduk);
         $produk->save();
         if($produk){
            return ['status'=>'success','message'=>'Produk Berhasil Disimpan!'];
         }else{
            return ['status'=>'error','message'=>'Produk Gagal Disimpan!'];
         }
      }else{
         return $validator->messages();
      }
   }

   public function getProduk(Request $request){
      if(request()->ajax()){
         $data = Produk::all();
         return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
               $btn = '<a href="javascript:void(0);" onclick=updated('.$row->id.')><i class="far fa-edit f-16 mr-15 text-warning"></i></a>';
               $btn .= '<a href="javascript:void(0);" onclick=deleted('.$row->id.')><i class="ik ik-trash-2 f-16 text-danger"></i></a>';
               return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
      }
   }
}
