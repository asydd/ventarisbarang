@extends('layouts.main')

@section('content')
<div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Form Edit Item</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Item</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $item->name) }}" required>
            </div>
            <div class="form-group">
                <label>Kategori</label>
                <select name="category_id" class="form-control" required>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $item->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Supplier</label>
                <select name="supplier_id" class="form-control" required>
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}" {{ $supplier->id == $item->supplier_id ? 'selected' : '' }}>{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stock" class="form-control" value="{{ old('stock', $item->stock) }}" required>
            </div>
            <div class="form-group">
                <label>Unit</label>
                <input type="text" name="unit" class="form-control" value="{{ old('unit', $item->unit) }}" required>
            </div>
            <div class="form-group">
                <label>Harga Beli</label>
                <input type="number" name="purchase_price" class="form-control" value="{{ old('purchase_price', $item->purchase_price) }}" step="0.01" required>
            </div>
            <div class="form-group">
                <label>Harga Jual</label>
                <input type="number" name="selling_price" class="form-control" value="{{ old('selling_price', $item->selling_price) }}" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-success">Update</button>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
