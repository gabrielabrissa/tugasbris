<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class DosenController extends Controller
{
    public function index() { 
        $dsn = Dosen::paginate(10);
        return view('dosen', ['dsn' => $dsn]);
        
    }
    public function tambah() { 
        return view('tambahdosen'); 
    }
    public function simpan(Request $request) { 
        $bhs = implode(",", $request->get('bahasa')); 
        Dosen::create([
            'nidn' => $request->nidn, 
            'nama' => $request->nama, 
            'gender' => $request->gender, 
            'kota' => $request->kota, 
            'bahasa' => $bhs 
            ]); 
            return redirect("/dosen");
        }
    public function edit($id) { 
        $dsn = Dosen::find($id); 
        return view('editdosen', ['dsn' => $dsn]); 
    }
    public function updated($id, Request $request) { 
        $bhs = implode(",", $request->get('bahasa')); 
        $dsn = Dosen::find($id); 
        $dsn->nidn = $request->nidn; 
        $dsn->nama = $request->nama; 
        $dsn->gender = $request->gender; 
        $dsn->kota = $request->kota; 
        $dsn->bahasa = $bhs; 
        $dsn->save(); 
        return redirect("/dosen"); 
    }
    public function delete($id) { 
        $dsn = Dosen::find($id); 
        $dsn->delete(); 
        return redirect('/dosen'); }

    public function search(Request $request) { 
        $cari = $request->q; 
        $dsn = DB::table('dosen_72190333') ->where('nama','like',"%".$cari."%") ->paginate(); 
        return view('dosen',['dsn' => $dsn]); 
    }
}

