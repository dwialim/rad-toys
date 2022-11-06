<?php

namespace App\Http\Controllers\landing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Session;

class landingController extends Controller{
   public function main(){
      return view('content.landing.main');
   }

   public function login(){
      return view('content.landing.login');
   }

   public function dologin(Request $req){
      $user = User::where('email', '=', $req->email)->first();
      if ($user) {
         if (Hash::check($req->password, $user->password)) {
            $req->session()->put('loginid', $user->id);
            return redirect()->route('dashboard');
         } else {
            // echo 'error2';
            return redirect()->route('login')->with('error', 'sandi salah!');
         }
      } else {
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
         if (Session::has('loginid')) {
            Session::pull('loginid');
            return redirect()->route('home');
        }
    }
}