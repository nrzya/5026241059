<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class MyPegawaiController extends Controller
{
    public function index()
    {
        $mypegawai = DB::table('mypegawai')->orderBy('kodepegawai')->get();
        return view('mypegawai.index', compact('mypegawai'));
    }

    public function create()
    {
        return view('mypegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|max:9|unique:mypegawai,kodepegawai',
            'namalengkap' => 'required|string|max:50',
            'divisi' => 'required|string|max:5',
            'departemen' => 'required|string|max:10',
        ]);

        DB::table('mypegawai')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('mypegawai.index')->with('success', 'Data Pegawai berhasil ditambahkan');
    }

    public function show($kodepegawai)
    {
        $mypegawai = DB::table('mypegawai')->where('kodepegawai', $kodepegawai)->first();

        if (!$mypegawai) {
            abort(404);
        }

        return view('mypegawai.show', compact('mypegawai'));
    }
}
