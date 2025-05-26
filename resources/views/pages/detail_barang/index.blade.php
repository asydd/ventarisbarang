@extends('layouts.main')

@section('content')
<div class="container mt-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0">Data Detail Barang</h4>
        <a href="{{ route('detail_barang.create') }}" class="btn btn-primary">
            <i class="fas fa-plus-circle"></i> Tambah Barang
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Daftar Barang</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Merk</th>
                            <th>Plat Nomor</th>
                            <th>Warna</th>
                            <th>Status</th>
                            <th>Kondisi</th>
                            <th>Lokasi</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $barang)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->merk }}</td>
                                <td>{{ $barang->plat_nomor }}</td>
                                <td>{{ $barang->warna }}</td>
                                <td>
                                    <span class="badge bg-{{ $barang->status_barang == 'aktif' ? 'success' : 'secondary' }}">
                                        {{ ucfirst($barang->status_barang) }}
                                    </span>
                                </td>
                                <td>
                                    @php
                                        $color = match($barang->kondisi_barang) {
                                            'baik' => 'success',
                                            'rusak ringan' => 'warning',
                                            'rusak berat' => 'danger',
                                            default => 'secondary',
                                        };
                                    @endphp
                                    <span class="badge bg-{{ $color }}">
                                        {{ ucfirst($barang->kondisi_barang) }}
                                    </span>
                                </td>
                                <td>{{ $barang->lokasi }}</td>
                                <td>{{ \Carbon\Carbon::parse($barang->tanggal_penerimaan)->format('d-m-Y') }}</td>
                                <td>{{ $barang->keterangan }}</td>
                                <td class="text-center">
                                    <a href="{{ route('detail_barang.edit', $barang->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('detail_barang.destroy', $barang->id) }}" method="POST" class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="11" class="text-center text-muted">Belum ada data barang.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
