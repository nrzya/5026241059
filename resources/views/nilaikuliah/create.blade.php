@extends('template')
@section('title', 'Data Siswa')
@section('konten')

    <h2>Tambah Data Nilai Kuliah</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('nilaikuliah.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>NRP</label><br>
            <input type="text" name="NRP" id="NRP" maxlength="6 " value="{{ old('NRP') }}">
        </p>

        <p>
            <label>Nilai Angka</label><br>
            <input type="text" name="NilaiAngka" id="NilaiAngka" maxlength="20" value="{{ old('NilaiAngka') }}">
        </p>

        <p>
            <label>SKS</label><br>
            <input type="text" name="SKS" id="SKS" maxlength="5" value="{{ old('SKS') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('nilaikuliah.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let nrp = document.getElementById('NRP').value.trim();
            let nilai = document.getElementById('NilaiAngka').value.trim();
            let sks = document.getElementById('SKS').value.trim();

            if (nrp === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (nrp.length != 6) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "NRP maksimal 6 karakter",
                    icon: "error"
                });
                return false;
            }

            if (nilai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nilai wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (sks === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "SKS wajib diisi",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
