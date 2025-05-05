@extends('layouts.main')

@section('header')
    <h1>Laporan Ringkasan Inventaris</h1>
@endsection

@section('content')
<div class="container-fluid mt-4">
    <h3 class="mb-4">Ringkasan Inventaris</h3>

    {{-- Ringkasan Kategori dan Produk --}}
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card shadow-sm border-left-primary">
                <div class="card-body">
                    <h5 class="card-title">Total Kategori</h5>
                    <p class="card-text display-6">{{ $data['total_categories'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-left-success">
                <div class="card-body">
                    <h5 class="card-title">Total Produk</h5>
                    <p class="card-text display-6">{{ $data['total_products'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-left-info">
                <div class="card-body">
                    <h5 class="card-title">Total Item</h5>
                    <p class="card-text display-6">{{ $data['total_items'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm border-left-warning">
                <div class="card-body">
                    <h5 class="card-title">Total Supplier</h5>
                    <p class="card-text display-6">{{ $data['total_suppliers'] }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Ringkasan Transaksi --}}
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card shadow-sm border-left-dark">
                <div class="card-body">
                    <h5 class="card-title">Total Transaksi</h5>
                    <p class="card-text display-6">{{ $data['total_transactions'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-left-success">
                <div class="card-body">
                    <h5 class="card-title">Barang Masuk</h5>
                    <p class="card-text display-6">{{ $data['total_in'] }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-sm border-left-danger">
                <div class="card-body">
                    <h5 class="card-title">Barang Keluar</h5>
                    <p class="card-text display-6">{{ $data['total_out'] }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Ringkasan Stok --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm border-left-primary">
                <div class="card-body">
                    <h5 class="card-title">Stok Saat Ini</h5>
                    <p class="card-text display-6">{{ $data['current_stock'] }}</p>
                    <small class="text-muted">Total keseluruhan stok dari semua item yang tersedia.</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
