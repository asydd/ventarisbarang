@extends('layouts.main')

@section('header')
    <h1 class="text-primary"><i class="fas fa-clipboard-list"></i> Laporan Ringkasan Inventaris</h1>
@endsection

@section('content')
<div class="container-fluid mt-4">
    {{-- Ringkasan Kategori dan Produk --}}
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card text-white bg-primary shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-tags"></i> Total Kategori</h5>
                    <h2 class="card-text">{{ $data['total_categories'] }}</h2>
                    <span class="badge badge-light">Kategori barang tercatat</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-boxes"></i> Total Produk</h5>
                    <h2 class="card-text">{{ $data['total_products'] }}</h2>
                    <span class="badge badge-light">Jenis produk tersedia</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-cubes"></i> Total Item</h5>
                    <h2 class="card-text">{{ $data['total_items'] }}</h2>
                    <span class="badge badge-light">Unit individual tercatat</span>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-truck"></i> Total Supplier</h5>
                    <h2 class="card-text">{{ $data['total_suppliers'] }}</h2>
                    <span class="badge badge-light">Penyedia aktif</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Ringkasan Transaksi --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-white bg-dark shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-exchange-alt"></i> Total Transaksi</h5>
                    <h2 class="card-text">{{ $data['total_transactions'] }}</h2>
                    <span class="badge badge-light">Keseluruhan aktivitas</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-arrow-circle-down"></i> Barang Masuk</h5>
                    <h2 class="card-text">{{ $data['total_in'] }}</h2>
                    <span class="badge badge-light">Transaksi penerimaan</span>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-danger shadow">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-arrow-circle-up"></i> Barang Keluar</h5>
                    <h2 class="card-text">{{ $data['total_out'] }}</h2>
                    <span class="badge badge-light">Transaksi pengeluaran</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Ringkasan Stok --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card border-left-primary shadow">
                <div class="card-body">
                    <h5 class="card-title text-primary"><i class="fas fa-warehouse"></i> Stok Saat Ini</h5>
                    <h2 class="card-text">{{ $data['current_stock'] }}</h2>
                    <small class="text-muted">Total keseluruhan stok dari semua item yang tersedia saat ini.</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
