@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Tambah Produk</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item active">Produk</li>
      </ol>
    </div>
</div> 
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-8 mx-auto">
        <form action="/products/store" method="POST">
            @csrf
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="name" class="form-label fw-bold">Nama Produk</label>
                        <input type="text" name="name" id="name" class="form-control form-control-lg @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror 
                    </div>

                    <div class="form-group mb-3">
                        <label for="description" class="form-label fw-bold">Deskripsi</label>
                        <textarea 
                            name="description"
                            id="description"
                            class="form-control @error('description') is-invalid @enderror"
                            rows="5">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="sku" class="form-label fw-bold">Kode Produk</label>
                        <input type="text" name="sku" id="sku" class="form-control form-control-lg @error('sku') is-invalid @enderror" value="{{ old('sku') }}">
                        @error('sku')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="price" class="form-label fw-bold">Harga</label>
                                <input type="number" name="price" id="price" class="form-control form-control-lg @error('price') is-invalid @enderror" value="{{ old('price') }}">
                                @error('price')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="stock" class="form-label fw-bold">Stok</label>
                                <input type="number" name="stock" id="stock" class="form-control form-control-lg @error('stock') is-invalid @enderror" value="{{ old('stock') }}">
                                @error('stock')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="category_id" class="form-label fw-bold">Kategori</label>
                        <select name="category_id" id="category_id" class="form-control form-control-lg @error('category_id') is-invalid @enderror">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="card-footer bg-light">
                    <div class="d-flex justify-content-end">
                        <a href="/products" class="btn btn-outline-secondary btn-lg mr-2">
                            <i class="fas fa-arrow-left"></i> Batal
                        </a>
                        <button type="submit" class="btn btn-primary btn-lg">
                            <i class="fas fa-save"></i> Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form> 
    </div>
  </div>
@endsection
