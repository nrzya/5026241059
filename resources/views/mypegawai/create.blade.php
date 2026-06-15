@extends('template')
@section('title', 'EAS Kode Soal mypegawai')
@section('konten')

    <h2>Kode Soal mypegawai</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('mypegawai.store') }}" method="POST" onsubmit="return validasiForm()">
        @csrf

        <p>
            <label>kodepegawai</label><br>
            <input type="text" name="kodepegawai" id="kodepegawai" maxlength="9" value="{{ old('kodepegawai') }}">
        </p>

        <p>
            <label>namalengkap</label><br>
            <input type="text" name="namalengkap" id="namalengkap" maxlength="50" value="{{ old('namalengkap') }}">
        </p>

        <p>
            <label>divisi</label><br>
            <input type="text" name="divisi" id="divisi" maxlength="5" value="{{ old('divisi') }}">
        </p>

        <p>
            <label>departemen</label><br>
            <input type="text" name="departemen" id="departemen" value="{{ old('departemen') }}">
        </p>

        <button type="submit">Simpan</button>
        <a href="{{ route('mypegawai.index') }}">Kembali</a>
    </form>

    <script>
        function validasiForm() {
            let kodepagawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();
            let divisi = document.getElementById('divisi').value.trim();
            let departemen = document.getElementById('departemen').value;

            if (kodepegawai === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "kode pagawai wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (kodepagawai.length > 9) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "kode pegawai maksimal 9 karakter",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (namalengkap.length > 50) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Nama maksimal 50 karakter",
                    icon: "error"
                });
                return false;
            }

            if (divisi === '') {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Divisi wajib diisi",
                    icon: "error"
                });
                return false;
            }

            if (divisi.length > 5) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "Divisi maksimal 5 karakter",
                    icon: "error"
                });
                return false;
            }

               if (departemen.length > 10) {
                Swal.fire({
                    title: "Kesalahan Input Data!",
                    text: "departemen maksimal 10 karakter",
                    icon: "error"
                });
                return false;
            }
            return true;
        }
    </script>
@endsection


