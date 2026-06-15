@extends('template')
@section('title', 'Data Pegawai')
@section('konten')

    <h2>Kode Soal mypegawai</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

            <form action="{{ route('mypegawai.show', $mypegawai->kodepegawai) }}" method="GET" onsubmit="return validasiForm()">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">kodepegawai (Read Only)</label>
                <input type="text" class="form-control" value="{{ $mypegawai->kodepegawai }}" readonly>
            </div>

            <div class="mb-3">
                <label class="form-label">namalengkap (Read Only)</label>
                <input type="text" name="namalengkap" id="namalengkap" class="form-control" maxlength="30" value="{{ old('namalengkap', $mypegawai->namalengkap) readonly}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Divisi (Read Only)</label>
                <input type="text" name="divisi" id="divisi" class="form-control" value="{{ old('divisi', $mypegawai->divisi) readonly}}">
            </div>

              <div class="mb-3">
                <label class="form-label">departemen (Read Only)</label>
                <input type="text" name="departemen" id="departemen" class="form-control" value="{{ old('departemen', $mypegawai->departemen) readonly}}">
            </div>

            <button type="submit" class="btn btn-primary">Done</button>
            <a href="{{ route('mypegawai.show') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script>
       function validasiForm() {
            let kodepagawai = document.getElementById('kodepegawai').value.trim();
            let namalengkap = document.getElementById('namalengkap').value.trim();
            let divisi = document.getElementById('divisi').value.trim();
            let departemen = document.getElementById('departemen').value;
        }
    </script>
@endsection
