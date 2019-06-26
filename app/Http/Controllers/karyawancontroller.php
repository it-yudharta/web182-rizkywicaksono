<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawancontroller extends Controller

{
    public function index()
    {
        $data_karyawan= \App\karyawan::all();
        return view('karyawan.index',['data_karyawan' => $data_karyawan]);
    }
    public function create(Request $request)
    {
       \App\karyawan::create($request->all());
       return redirect('/karyawan')->with('sukses','Data isok diinput');
       
    }
    public function edit($id)
    {
        $karyawan= \App\karyawan::find($id);
        return view('karyawan/edit',['karyawan' =>$karyawan]);
    }
    public function update(Request $request,$id)
    {
        $karyawan = \App\karyawan::find($id);
        $karyawan->update($request->all()); 
        return redirect('/karyawan')->with('sukses','Data isok diupdate');
    }
    public function delete($id)
    {
        $karyawan = \App\karyawan::find($id);
        $karyawan->delete($karyawan);
        return redirect('/karyawan')->with('sukses','Data isok dihapus');
    }
}
