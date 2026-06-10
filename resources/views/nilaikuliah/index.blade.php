@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Data Nilai Kuliah</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

     <p>
        <a href="{{ route('nilaikuliah.create') }} "  class = "btn btn-primary">Tambah Data</a>
    </p>

    <br><br>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        </thead>
        <tbody>
            @forelse($nilai as $row)
                <tr>
                    <td>{{ $row->ID }}</td>
                    <td>{{ $row->NRP }}</td>
                    <td>{{ $row->NilaiAngka }}</td>
                    <td>{{ $row->SKS }}</td>
                    <td>
                        @if ($row->NilaiAngka <= 40)
                            D
                        @elseif($row->NilaiAngka >= 41 && $row->NilaiAngka <= 60)
                            C
                        @elseif($row->NilaiAngka >= 61 && $row->NilaiAngka <= 80)
                            B
                        @else
                            A
                        @endif
                    </td>
                    <td>
                            <strong>{{ $row->NilaiAngka * $row->SKS }}</strong>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

