<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\StokProduk;
use DataTables, Validator;


class kategoriController extends Controller{
	private $base = 'content.admin.master.kategori.';
	public function main(){
		return view($this->base.'main');
	}

	public function form(Request $request){
		// return $this->kodeKategori();
		if(!isset($request->id)){
			$data['kode'] = $this->kodeKategori();
			$data['data'] = '';
		}else{
			$data['kode'] = '';
			$data['data'] = Kategori::where('id',$request->id)->first();
		}
		$content = view($this->base.'form',$data)->render();
		return ['status'=>'success','message'=>'berhasil mengambil data','data'=>$content];
	}

	public function getKategori(Request $request){
		if(request()->ajax()){
			$data = Kategori::orderBy('kode_kategori','asc')->get();
			return DataTables::of($data)
			->addIndexColumn()
			->addColumn('action',function($row){
				$btn = "
				<div class='row'>
					<div class='col-sm-12 text-center'>
						<a href='javascript:' title='Edit' onclick=updated(".$row->id.")><i class='far fa-edit f-16 mr-15 text-warning'></i></a> &nbsp;
						<a href='javascript:' title='Hapus' onclick=deleted(".$row->id.")><i class='far fa-trash-alt f-16 text-danger'></i></a>
					</div>
				</div>";
				return $btn;
			})
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
			if(!isset($request->id)){
				$kategori = new Kategori;
				$kategori->kode_kategori = $request->kodeKategori;
			}else{
				$kategori = Kategori::find($request->id);
			}
			$kategori->nama_kategori = strtolower($request->namaKategori);
			$kategori->save();
			if($kategori){
				if(!isset($request->id)){
					return ['status'=>'success', 'message'=>'Kategori Berhasil Disimpan!'];
				}else{
					return ['status'=>'success', 'message'=>'Kategori Berhasil Diperbarui!'];
				}
			}else{
				if(!isset($request->id)){
					return ['status'=>'error','message'=>'Kategori Gagal Disimpan!'];
				}else{
					return ['status'=>'error', 'message'=>'Kategori Gagal Diperbarui!'];
				}
			}
		}else{
			return $validator->messages();
		}
	}

	public function destroy(Request $request){
		$id = $request->id;
		$data = Kategori::find($id);
		if(!empty($data)){
			$stok = StokProduk::where('kategori_id',$id)->first();
			if(!empty($stok)){
				return ['status'=>'error','message'=>'Kategori Sedang Digunakan, Tidak Bisa Dihapus!'];
			}else{
				$data->delete();
				return ['status'=>'success','message'=>'Kategori Berhasil Dihapus!'];
			}
		}else{
			return ['status'=>'error', 'message'=>'Data Gagal Dihapus!'];
		}
	}
}