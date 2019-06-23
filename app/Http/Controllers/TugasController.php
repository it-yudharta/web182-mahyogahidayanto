<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index()
    {
        $data_tugas = \App\Tugas::all();
        return view ('tugas.index',['data_tugas' => $data_tugas]);
    }

    public function create(Request $request)
    {
        \App\Tugas::create($request->all());
        return redirect('/tugas')->with('sukses','Data Berhasil Diinput');
    }

    public function edit($id)
    {
        $tugas=\App\Tugas::find($id);
        return view('tugas/edit',['tugas'=>$tugas]);
    }

    public function update(Request $request,$id)
    {
        $tugas=\App\Tugas::find($id);
        $tugas->update($request->all());
        return redirect('/tugas')->with('sukses','Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $tugas=\App\Tugas::find($id);
        $tugas->delete();
        return redirect('/tugas')->with('sukses','Data Berhasil Dihapus');
    }
}

