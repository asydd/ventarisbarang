@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Tambah Supplier</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/dashboard">Beranda</a></li>
        <li class="breadcrumb-item"><a href="/suppliers">Supplier</a></li>
        <li class="breadcrumb-item active">Tambah Supplier</li>
      </ol>
    </div>
</div> 
@endsection

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Form Tambah Supplier</h5>
            </div>
            <div class="card-body">
                <form action="{{ url('/suppliers/store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Supplier</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Telepon</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="address" class="form-control" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="/suppliers" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
