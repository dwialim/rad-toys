<?php

namespace App\Http\Controllers\landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Profile;
use App\Models\StokProduk;
use Session;

class landingController extends Controller{
	public function main(){
		$profile = Profile::all();
		$data['instagram'] = "";
		$data['facebook']  = "";
		$data['phone']     = "";
		if(count($profile)>0){
			$data['instagram'] = $profile[0]['instagram'];
			$data['facebook']  = $profile[0]['facebook'];
			$data['phone']     = $profile[0]['whatsapp'];
		}
		$data['whatsapp']  = "https://web.whatsapp.com/send?phone=".$data['phone']."&text&type=phone_number&app_absent=0";

		$stok = StokProduk::with('produk')->where('publish',true)->get();
		$data['stok'] = $stok;
		// return $stok;
		// return $data;
		return view('content.landing.main',$data);
	}

	public function login(){
		return view('content.landing.login');
	}

	public function dologin(Request $req){
		$user = User::where('email', '=', $req->email)->first();
		if($user){
			if(Hash::check($req->password, $user->password)){
				$req->session()->put('loginid', $user->id);
				return redirect()->route('dashboard');
			}else{
				return redirect()->route('login')->with('error', 'sandi salah!');
			}
		}else{
			return redirect()->route('login')->with('error', 'data tidak ditemukan!');
		}
	}

	public function register(Request $req){
		$data = new User();

		$data->name = $req->username;
		$data->email = $req->email;
		$data->password =  Hash::make($req->password);
		// $data->token = $req->token;
		$data->save();

		return redirect()->route('login')->with('success', 'Anda berhasil Terdaftar!');
		// print_r($data);
	}

	public function logout(){
		if(Session::has('loginid')){
			Session::pull('loginid');
			return redirect()->route('login');
		}
	}
}