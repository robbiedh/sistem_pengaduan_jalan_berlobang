<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Laporan;
use App\User;

class AdminController extends Controller
{
    //
    public function daftar_user()
    {
    $data_user = User::all();
    
    return view('admin.daftar_user',['data_user'=>$data_user]);
    }

    public function index()
    {
    $laporan = Laporan::orderBy('id_laporan','desc')->get();
     foreach($laporan as $key => $temp){
         
         $laporan[$key]['user']= User::where('id',$temp->id_user)->pluck('email')->first();
     }
    
    return view('admin.daftar_laporan',['laporan'=>$laporan]);
    }
    
    public function laporan($id_laporan)
    {
        
    $laporan = Laporan::where('id_laporan',$id_laporan)->update(['status'=>'Ditinjau']);
    
    return back();
    }
    

}
