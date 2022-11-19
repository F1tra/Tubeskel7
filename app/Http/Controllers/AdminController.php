<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\models\Admin;

class AdminController extends Controller
{
    public function index (){
        $admin = DB::table('tbl_admin')
        ->get();
        // dd($admin);
        return view ('admin.index', compact ("admin"));
    }
    public function tambah (){
      ;
        return view ('admin.tambah');
    }
    public function simpan(request $ambil){
      dd($ambil);
        // $simpan = Admin::create([
        //     'id_admin' =>$request->id_admin,
        //     'username' =>$request->username,
        //     'password' => $request->password,
        //     'admin_level' => $request->admin_level,
        //     'admin_nama' => $request->admin_nama,
        //     'admin_status' => $request->admin_status
            
        // ]);
        //   return redirect ('admin');
      }
}