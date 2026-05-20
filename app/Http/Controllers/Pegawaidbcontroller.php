<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Pegawaidbcontroller extends Controller
{
      public function index2()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->get();

    	// mengirim data pegawai ke view index
    	return view('index2',['pegawai' => $pegawai]);
    }
}
