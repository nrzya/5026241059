@extends('template')
@section('title', 'Tambah Pembelian')
@section('konten')

    <div class="container mt-4" style="max-width: 600px;">
        <h2>Form Pembelian Barang (Beli)</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('keranjang.store') }}" method="POST" onsubmit="return validasiForm()">
            @csrf

            <div class="mb-3">
                <label class="form-label">Kode Barang</label>
                <input type="text" name="KodeBarang" id="KodeBarang" class="form-control" placeholder="Masukkan Kode Barang" value="{{ old('KodeBarang') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Jumlah Pembelian</label>
                <input type="text" name="Jumlah" id="Jumlah" class="form-control" placeholder="Masukkan Jumlah Barang" value="{{ old('Jumlah') }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Harga per item (Rp)</label>
                <input type="text" name="Harga" id="Harga" class="form-control" placeholder="Masukkan Harga Satuan" value="{{ old('Harga') }}">
            </div>

            <button type="submit" class="btn btn-success">Simpan & Selesai Beli</button>
            <a href="{{ route('keranjang.index') }}" class="btn btn-secondary">Kembali ke Keranjang</a>
        </form>
    </div>

    <script>
        function validasiForm() {
            let kode = document.getElementById('KodeBarang').value.trim();
            let jumlah = document.getElementById('Jumlah').value.trim();
            let harga = document.getElementById('Harga').value.trim();

            if (kode === '') {
                Swal.fire({ title: "Kesalahan Input!", text: "Kode Barang wajib diisi", icon: "error" });
                return false;
            }
            if (jumlah === '' || parseInt(jumlah) <= 0) {
                Swal.fire({ title: "Kesalahan Input!", text: "Jumlah Pembelian harus lebih besar dari 0", icon: "error" });
                return false;
            }
            if (harga === '' || parseInt(harga) < 0) {
                Swal.fire({ title: "Kesalahan Input!", text: "Harga tidak boleh kosong atau bernilai negatif", icon: "error" });
                return false;
            }
            return true;
        }
    </script>
@endsection
