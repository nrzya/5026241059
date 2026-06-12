@extends('template')
@section('title', 'EAS - Keranjang Belanja')
@section('konten')

    <div class="container mt-4">
        <h2>Keranjang Belanja</h2>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('keranjang.create') }}" class="btn btn-primary mb-3">Beli</a>

        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Kode Pembelian</th>
                    <th>Kode Barang</th>
                    <th>Jumlah Pembelian</th>
                    <th>Harga per item</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($keranjang as $row)
                    <tr>
                        <td>{{ $row->ID }}</td>
                        <td>{{ $row->KodeBarang }}</td>
                        <td>{{ $row->Jumlah }}</td>
                        <td>Rp {{ number_format($row->Harga, 0, ',', '.') }}</td>
                        <td>
                            <strong>Rp {{ number_format($row->Jumlah * $row->Harga, 0, ',', '.') }}</strong>
                        </td>
                        <td>
                            <form action="{{ route('keranjang.destroy', $row->ID) }}" method="POST" style="display:inline;"
                                  onsubmit="return confirm('Apakah Anda yakin ingin membatalkan pembelian ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
