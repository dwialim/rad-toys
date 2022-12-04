<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use DataTables, Validator;
use Illuminate\Support\Facades\Hash;



class userController extends Controller
{
    public function main(){
        // $data = User::paginate(5);
        return view('content.admin.master.user.main');
        // echo 'ok';
    }

    public function getuser(Request $request){
        if(request()->ajax()){
            $data = User::orderBy('id','asc')->get();
            return DataTables::of($data)
            ->addIndexColumn()
            ->addColumn('action',function($row){
                $btn = "
                    <div class='row'>
                        <div class='col-sm-12 text-center'>
                        <a id='edt_usr' href='javascript:' data-bs-toggle='modal' data-bs-target='#modal_usr' data-id_usr='$row->id' data-username='$row->name' data-email='$row->email' data-password='$row-password'><i class='far fa-edit f-16 mr-15 text-warning'></i></a>
                        <a id='shw_usr' href='javascript:' data-bs-toggle='modal' data-bs-target='#modal_usr' data-id_usr='$row->id' data-username='$row->name' data-email='$row->email' ><i class='fa fa-eye'></i></a>
                        <a href='javascript:' title='Hapus' onclick=deleted(".$row->id.")><i class='far fa-trash-alt f-16 text-danger'></i></a>
                        </div>
                    </div>";
                return $btn;
            })
            ->addColumn('kode',function($row){
                $txt = "
                    <p class='text-center' style='margin:0;'>".$row->id."</p>";
                return $txt;
            })
            ->addColumn('nama',function($row){
                $txt = "
                    <div class='row'>
                        <div class='col-sm-12 text-center'>".ucwords($row->name)."</div>
                    </div>";
                    return $txt;
            })
            ->addColumn('email',function($row){
                $txt = "
                    <div class='row'>
                        <div class='col-sm-12 text-center'>".ucwords($row->email)."</div>
                    </div>";
                    return $txt;
            })
            ->rawColumns(['kode','name','email','action'])
            ->make(true);
        }
    }

    public function save(Request $req){
        $data = new User();

        $data->name = $req->username;
        $data->email = $req->email;
        $data->password =  Hash::make($req->password);
        // $data->token = $req->token;
        $data->save();

        return redirect()->route('user')->with('success', 'Data berhadil ditambahkan!');
        // print_r($data);
    }

    public function destroy(Request $request){
        $id = $request->id;
        $data = User::find($id);
        if($data){    
            $data->delete();
            return ['status'=>'success','message'=>'Nama Produk Berhasil Dihapus!'];
        }else{
            return ['status'=>'error','message'=>'Data Gagal Dihapus!'];
        }
    }

    public function edt_user(Request $req)
    {
        $data = User::find($req->id_usr);
        $data->name = $req->username;
        $data->email = $req->email;
        if(isset($req->password)){
            $data->password =  Hash::make($req->password);
        }
        $data->save();

        return redirect()->back()->with('success', 'Data berhasil di ubah');
        // print_r($data);
        // echo 'ok';
    }

}
