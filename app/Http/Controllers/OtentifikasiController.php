<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OtentifikasiController extends Controller
{
    public function index() { 
        return view('login');
        
    }
    public function simpan(Request $request) { 
        if(Auth::attempt(['email'=> $request->username,'password'=> $request->password])){
            return redirect('/mahasiswa');
        }
    }
}
