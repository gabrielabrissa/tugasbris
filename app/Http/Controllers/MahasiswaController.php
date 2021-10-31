<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index() { 
        $mhs = Mahasiswa::paginate(10);
        return view('mahasiswa', ['mhs' => $mhs]);
        
    }
    public function tambah() { 
        return view('tambah'); 
    }
    public function simpan(Request $request) { 
        $bhs = implode(",", $request->get('bahasa')); 
        Mahasiswa::create([
            'nim' => $request->nim, 
            'nama' => $request->nama, 
            'gender' => $request->gender, 
            'jurusan' => $request->jurusan, 
            'bahasa' => $bhs 
            ]); 
            return redirect("/mahasiswa");
        }
    public function edit($id) { 
        $mhs = Mahasiswa::find($id); 
        return view('edit', ['mhs' => $mhs]); 
    }
    public function updated($id, Request $request) { 
        $bhs = implode(",", $request->get('bahasa')); 
        $mhs = Mahasiswa::find($id); 
        $mhs->nim = $request->nim; 
        $mhs->nama = $request->nama; 
        $mhs->gender = $request->gender; 
        $mhs->jurusan = $request->jurusan; 
        $mhs->bahasa = $bhs; 
        $mhs->save(); 
        return redirect("/mahasiswa"); 
    }
    public function delete($id) { 
        $mhs = Mahasiswa::find($id); 
        $mhs->delete(); 
        return redirect('/mahasiswa'); }

        public function search(Request $request) { 
            $cari = $request->q; 
            $mhs = DB::table('mahasiswa_72190333') ->where('nama','like',"%".$cari."%") ->paginate(); 
            return view('mahasiswa',['mhs' => $mhs]); 
        }
}
