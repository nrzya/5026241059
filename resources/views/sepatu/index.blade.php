@extends('template')
@section('title', 'Data Sepatu')
@section('konten')

    <div class="container mt-4">
        <h2>Data Sepatu</h2>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <a href="{{ route('sepatu.create') }}" class="btn btn-primary mb-3">Tambah Sepatu</a>

        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Kode Sepatu</th>
                    <th>Merk Sepatu</th>
                    <th>Stock Sepatu</th>
                    <th>Tersedia</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($sepatu as $row)
                    <tr>
                        <td>{{ $row->kodesepatu }}</td>
                        <td>{{ $row->merksepatu }}</td>
                        <td>{{ $row->stocksepatu }}</td>
                        <td>
                            @if($row->tersedia == 'Y')
                                <span class="badge bg-success">Tersedia</span>
                            @else
                                <span class="badge bg-danger">Habis</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('sepatu.edit', $row->kodesepatu) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('sepatu.destroy', $row->kodesepatu) }}" method="POST" style="display:inline;"
                                  onsubmit="return confirm('Yakin ingin menghapus data sepatu ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Belum ada data sepatu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
