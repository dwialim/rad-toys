<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Profile;
use DataTables;

class profileController extends Controller{
	public function main(){
		return view('content.admin.master.profile.main');
	}

	public function form(Request $request){
		if(!isset($request->id)){
			$data['data'] = '';
			$data['page'] = 'Tambah';
		}else{
			$data['data'] = Profile::find($request->id);
			$data['page'] = 'Edit';
		}
		$content = view('content.admin.master.profile.form',$data)->render();
		return ["status"=>"success","message"=>"Data berhasil diambil","data"=>$content];
	}

	public function save(Request $request){
		$id = $request->id;
		$num = $request->whatsapp;
		if(isset($num)){
			$split = str_split($num);
			if($split[0]=='0'){
				array_shift($split);
				$num = "62".join('',$split);
			}elseif($split[0]=='6'){
				$num = join('',$split);
			}
		}
		if(!isset($id)){
			$profile = new Profile;
		}else{
			$profile = Profile::find($id);
		}
		$profile->alamat    = $request->alamat??NULL;
		$profile->facebook  = $request->facebook??NULL;
		$profile->instagram = $request->instagram??NULL;
		$profile->whatsapp  = $num;
		$profile->save();
		if($profile){
			if(!isset($id)){
				return ['status'=>'success','code'=>201,'message','Profile Berhasil Disimpan!'];
			}else{
				return ['status'=>'success','code'=>200,'message','Profile Berhasil Diperbarui!'];
			}
		}else{
			if(!isset($id)){
				return ['status'=>'error','message','Profile Gagal Disimpan!'];
			}else{
				return ['status'=>'error','message','Profile Gagal Diperbarui!'];
			}
		}
	}

	public function getProfile(Request $request){
		if(request()->ajax()){
			$data = Profile::all();
			return DataTables::of($data)
			->addIndexColumn()
			->addColumn('action',function($row){
				$btn = "
					<div class='row'>
						<div class='col-sm-12 text-center'>
						<a href='javascript:' title='Edit' onclick=updated(".$row->id.")><i class='far fa-edit f-16 mr-15 text-warning'></i></a>
						</div>
					</div>";
				return $btn;
			})
			->rawColumns(['action'])
			->make(true);
		}
	}
}
