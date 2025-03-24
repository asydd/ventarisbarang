@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
      <h1>Kategori</h1>
    </div>
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
        <li class="breadcrumb-item active">Kategori</li>
      </ol>
    </div>
</div> 
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-10 mx-auto">
      <div class="card shadow-lg">
        <div class="card-header d-flex justify-content-end">
          <a href="/categories/create" class="btn btn-primary btn-lg">
            <i class="fas fa-plus"></i> Tambah Kategori
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead class="bg-primary text-white">
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Slug</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($categories as $category)
                <tr>
                  <td>{{ ($categories->currentPage() -1) * $categories ->perPage() + $loop->index + 1 }}</td>
                  <td>{{ $category->name }}</td> 
                  <td>{{ $category->slug ?? '-' }}</td>
                  <td class="text-center">
                    <div class="btn-group">
                      <a href="/categories/edit/{{ $category->id }}" class="btn btn-warning btn-sm text-bold">
                        <i class="fas fa-edit"></i> Edit
                      </a>
                      <form action="/categories/{{ $category->id }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm text-bold">
                          <i class="fas fa-trash-alt"></i> Delete
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
          {{ $categories->links('pagination::bootstrap-5') }}
        </div>
      </div>
    </div>
  </div>
@endsection
