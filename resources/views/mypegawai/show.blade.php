@extends('template')
@section('title', 'EAS Kode Soal mypegawai')
@section('konten')

    <h2>Kode Soal mypegawai</h2>

    <h3>Detail Data Pegawai</h3>

    <p>
        <label>Kode Pegawai</label><br>
        <input type="text" value="{{ $mypegawai->kodepegawai }}" readonly>
    </p>

    <p>
        <label>Nama Lengkap</label><br>
        <input type="text" value="{{ $mypegawai->namalengkap }}" readonly>
    </p>

    <p>
        <label>Divisi</label><br>
        <input type="text" value="{{ $mypegawai->divisi }}" readonly>
    </p>

    <p>
        <label>Departemen</label><br>
        <input type="text" value="{{ $mypegawai->departemen}}" readonly>
    </p>

    <a href="{{ route('mypegawai.index') }}">Kembali</a>

@endsection
