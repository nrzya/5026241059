<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $keranjang = DB::table('keranjangbelanja')->orderBy('ID')->get();
        return view('keranjang.index', compact('keranjang'));
    }

    public function create()
    {
        return view('keranjang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer|min:1',
            'Jumlah' => 'required|integer|min:1',
            'Harga' => 'required|integer|min:0'
        ]);

        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
        ]);

        return redirect()->route('keranjang.index')->with('success', 'Pembelian berhasil ditambahkan.');
    }

        public function destroy($id)
    {
        DB::table('keranjangbelanja')->where('ID', $id)->delete();

        return redirect()->route('keranjang.index')->with('success', 'Pembelian berhasil dihapus.');
    }
}
