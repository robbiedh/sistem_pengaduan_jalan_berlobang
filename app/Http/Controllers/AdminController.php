<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function daftar_user()
    {
        
        
        return view('admin.daftar_user');
    }
}
