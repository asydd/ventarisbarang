@extends('layouts.main')

@section('content')
<div class="container mt-3">
    <h4>Tambah Detail Barang</h4>

    <form action="{{ route('detail_barang.store') }}" method="POST">
        @csrf
        @include('pages.detail_barang._form', ['barang' => null])
        <button type="submit" class="btn btn-primary mt-2">Simpan</button>
        <a href="{{ route('detail_barang.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>
@endsection
