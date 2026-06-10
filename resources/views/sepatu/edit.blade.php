@extends('template')
@section('title', 'Edit Sepatu')
@section('konten')

    <div class="container mt-4" style="max-width: 600px;">
        <h2>Edit Sepatu</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('sepatu.update', $sepatu->kodesepatu) }}" method="POST" onsubmit="return validasiForm()">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Kode Sepatu (Read Only)</label>
                <input type="text" class="form-control" value="{{ $sepatu->kodesepatu }}" readonly disabled>
            </div>

            <div class="mb-3">
                <label class="form-label">Merk Sepatu</label>
                <input type="text" name="merksepatu" id="merksepatu" class="form-control" maxlength="30" value="{{ old('merksepatu', $sepatu->merksepatu) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Stock Sepatu</label>
                <input type="number" name="stocksepatu" id="stocksepatu" class="form-control" value="{{ old('stocksepatu', $sepatu->stocksepatu) }}">
            </div>

            <div class="mb-4">
                <label class="form-label d-block">Status Ketersediaan</label>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" name="tersedia" id="tersedia" value="Y" {{ old('tersedia', $sepatu->tersedia) == 'Y' ? 'checked' : '' }}>
                    <label class="form-check-label" for="tersedia">Centang jika sepatu tersedia</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('sepatu.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script>
        function validasiForm() {
            let merk = document.getElementById('merksepatu').value.trim();
            let stock = document.getElementById('stocksepatu').value.trim();

            if (merk === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk sepatu wajib diisi", icon: "error" });
                return false;
            }
            if (merk.length > 30) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Merk sepatu maksimal 30 karakter", icon: "error" });
                return false;
            }
            if (stock === '') {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Stock sepatu wajib diisi", icon: "error" });
                return false;
            }
            if (isNaN(stock) || parseInt(stock) < 0) {
                Swal.fire({ title: "Kesalahan Input Data!", text: "Stock harus berupa angka positif", icon: "error" });
                return false;
            }
            return true;
        }
    </script>
@endsection
