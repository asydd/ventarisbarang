@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Produk</h1>
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
    <div class="col">
      <div class="card shadow-lg">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Daftar Produk</h5>
          <a href="/products/create" class="btn btn-sm btn-light text-primary">
            <i class="fas fa-plus"></i> Tambah Produk
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover table-striped">
              <thead class="bg-dark text-white">
                <tr>
                  <th>No</th>
                  <th>Produk</th>
                  <th>Deskripsi</th>
                  <th>Kode</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>{{ ($products->currentPage() -1) * $products ->perPage() + $loop->index + 1 }}</td>
                  <td><strong>{{ $product->name }}</strong></td> 
                  <td>{{ $product->description ?? '-' }}</td>
                  <td><span class="badge bg-secondary">{{ $product->sku }}</span></td>
                  <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                  <td><span class="badge bg-info text-white">{{ $product->stock }}</span></td>
                  <td><span class="badge bg-success">{{ $product->category->name}}</span></td>
                  <td>
                    <div class="d-flex">
                      <a href="/products/edit/{{ $product->id }}" class="btn btn-sm btn-warning mr-2 text-bold">
                        <i class="fas fa-edit"></i> Edit
                      </a>
                      <form action="/products/{{ $product->id }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus produk ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger text-bold">
                          <i class="fas fa-trash"></i> Delete
                        </button>
                      </form>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer">
          {{ $products->links('pagination::bootstrap-5') }}
        </div>
      </div>
    </div>
  </div>
@endsection
