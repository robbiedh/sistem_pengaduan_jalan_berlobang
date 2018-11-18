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
    $user = User::orderBy('id_user','desc');
        return view('admin.daftar_user')->with('user', $user);
    }

    public function index()
    {
    $laporan = Laporan::orderBy('id_laporan','desc')->get();
        // dd($laporan);
    return view('admin.daftar_laporan')->with('laporan', $laporan);
    }
    
    public function laporan($id_laporan)
    {
    $laporan = Laporan::where('id_laporan',$id_laporan)->get();
        // dd($laporan);
    return view('admin.detail_laporan')->with('laporan', $laporan[0]);
    }
    

}
