@extends('template')
@section('title', 'EAS Kode Soal mypegawai')
@section('konten')

    <h2>Kode Soal mypegawai</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('mypegawai.create') }}">Tambah Data</a>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>kodepegawai</th>
            <th>namalengkap</th>
            <th>divisi</th>
            <th>departemen</th>
            <th>Action</th>
        </tr>
  @forelse($mypegawai as $row)
            <tr>
                <td>{{ $row->kodepegawai }}</td>
                <td>{{ $row->namalengkap }}</td>
                <td>{{ $row->divisi }}</td>
                <td>{{ $row->departemen }}</td>
                <td>
                    <a href="{{ route('mypegawai.show', $row->kodepegawai) }}" class="btn btn-success">View</a>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5"></td>
            </tr>
        @endforelse
    </table>
@endsection
