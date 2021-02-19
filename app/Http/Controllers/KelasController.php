<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $data_kelas = Kelas::all();
        return view('kelas.index', ['data_kelas' => $data_kelas]);
    }

    public function create(Request $request)
    {
        Kelas::create($request->all());
        return redirect('/kelas')->with('success','Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas/edit', ['kelas' => $kelas]);
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect('/kelas')->with('success','Data berhasil diubah');
    }

    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('success','Data berhasil dihapus');
    }
}
