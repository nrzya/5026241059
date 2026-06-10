<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiKuliahController extends Controller
{
    public function index()
    {
        $nilai = DB::table('nilaikuliah')->orderBy('ID')->get();
        return view('nilaikuliah.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|size:6',
            'NilaiAngka' => 'required|integer|min:0|max:100',
            'SKS' => 'required|integer|min:1',
        ]);

        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        return redirect()->route('nilaikuliah.index')->with('success', 'Data nilai berhasil ditambahkan.');
    }
}
