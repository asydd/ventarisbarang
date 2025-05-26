@extends('layouts.main')

@section('content')
<div class="container mt-3">
    <h4>Edit Detail Barang</h4>

    <form action="{{ route('detail_barang.update', $detail->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('pages.detail_barang._form', ['barang' => $detail])
        <button type="submit" class="btn btn-success mt-2">Update</button>
        <a href="{{ route('detail_barang.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>
@endsection
