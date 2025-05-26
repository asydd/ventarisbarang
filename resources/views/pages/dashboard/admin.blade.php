@extends('layouts.main')

@section('header')
<h1>Dashboard Inventaris Perusahaan</h1>
@endsection

@section('content')
<div class="row">
    <!-- Kartu Ringkasan Dummy -->
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>132</h3>
                <p>Total Aset</p>
            </div>
            <div class="icon">
                <i class="fas fa-boxes"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>24</h3>
                <p>Total Karyawan</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>98</h3>
                <p>Total Transaksi</p>
            </div>
            <div class="icon">
                <i class="fas fa-exchange-alt"></i>
            </div>
        </div>
    </div>
</div>

<!-- Stok Aset per Kategori -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Stok Aset per Kategori</h3>
    </div>
    <div class="card-body">
        <div class="progress-group">
            Elektronik
            <span class="float-right"><b>45</b>/100</span>
            <div class="progress progress-sm">
                <div class="progress-bar bg-primary" style="width: 45%"></div>
            </div>
        </div>
        <div class="progress-group">
            Furniture
            <span class="float-right"><b>25</b>/100</span>
            <div class="progress progress-sm">
                <div class="progress-bar bg-success" style="width: 25%"></div>
            </div>
        </div>
        <div class="progress-group">
            ATK
            <span class="float-right"><b>32</b>/100</span>
            <div class="progress progress-sm">
                <div class="progress-bar bg-warning" style="width: 32%"></div>
            </div>
        </div>
        <div class="progress-group">
            Kendaraan
            <span class="float-right"><b>30</b>/100</span>
            <div class="progress progress-sm">
                <div class="progress-bar bg-danger" style="width: 30%"></div>
            </div>
        </div>
    </div>
</div>

<!-- Transaksi Bulanan -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Transaksi Bulanan</h3>
    </div>
    <div class="card-body">
        <div class="row text-center">
            @php
                $bulan = ['Jan' => 5, 'Feb' => 12, 'Mar' => 9, 'Apr' => 15, 'Mei' => 8, 'Jun' => 11];
            @endphp
            @foreach($bulan as $nama => $jumlah)
            <div class="col">
                <p><strong>{{ $nama }}</strong></p>
                <div style="height: {{ $jumlah * 4 }}px; background: #ffc107; width: 20px; margin: 0 auto;"></div>
                <small>{{ $jumlah }}</small>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
