<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepatuController extends Controller
{
    public function index()
    {
        $sepatu = DB::table('sepatu')->orderBy('kodesepatu')->get();
        return view('sepatu.index', compact('sepatu'));
    }

    public function create()
    {
        return view('sepatu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merksepatu' => 'required|string|max:30',
            'stocksepatu' => 'required|integer|min:0',
            // Jika switch tidak dicentang, default nilainya 'T'
        ]);

        $tersedia = $request->has('tersedia') ? 'Y' : 'T';

        DB::table('sepatu')->insert([
            'merksepatu' => $request->merksepatu,
            'stocksepatu' => $request->stocksepatu,
            'tersedia' => $tersedia,
        ]);

        return redirect()->route('sepatu.index')->with('success', 'Data sepatu berhasil ditambahkan.');
    }

    public function edit($kodesepatu)
    {
        $sepatu = DB::table('sepatu')->where('kodesepatu', $kodesepatu)->first();

        if (!$sepatu) {
            abort(404);
        }

        return view('sepatu.edit', compact('sepatu'));
    }

    public function update(Request $request, $kodesepatu)
    {
        $request->validate([
            'merksepatu' => 'required|string|max:30',
            'stocksepatu' => 'required|integer|min:0',
        ]);

        $tersedia = $request->has('tersedia') ? 'Y' : 'T';

        DB::table('sepatu')
            ->where('kodesepatu', $kodesepatu)
            ->update([
                'merksepatu' => $request->merksepatu,
                'stocksepatu' => $request->stocksepatu,
                'tersedia' => $tersedia,
            ]);

        return redirect()->route('sepatu.index')->with('success', 'Data sepatu berhasil diubah.');
    }

    public function destroy($kodesepatu)
    {
        DB::table('sepatu')->where('kodesepatu', $kodesepatu)->delete();

        return redirect()->route('sepatu.index')->with('success', 'Data sepatu berhasil dihapus.');
    }
}
