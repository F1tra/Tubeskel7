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
}