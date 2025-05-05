@extends('layouts.main')

@section('header')
<div class="row mb-2">
  <div class="col-sm-6">
    <h1>Edit Transaksi</h1>
  </div>
  <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
      <li class="breadcrumb-item active">Edit Transaksi</li>
    </ol>
  </div>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-8 mx-auto">
    <div class="card shadow">
      <div class="card-body">

        {{-- Validasi Gagal --}}
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul class="mb-0">
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="form-group">
            <label for="user_id">User</label>
            <select name="id_user" id="user_id" class="form-control @error('user_id') is-invalid @enderror">
              <option value="">-- Pilih User --</option>
              @foreach ($users as $user)
                <option value="{{ $user->id }}" 
                  {{ old('id_user', $transaction->id_user) == $user->id ? 'selected' : '' }}>
                  {{ $user->name }}
                </option>
              @endforeach
            </select>
            @error('user_id')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="type">Tipe Transaksi</label>
            <select name="type" id="type" class="form-control @error('type') is-invalid @enderror">
              <option value="">-- Pilih Tipe --</option>
              <option value="in" {{ old('type', $transaction->type) == 'in' ? 'selected' : '' }}>Masuk</option>
              <option value="out" {{ old('type', $transaction->type) == 'out' ? 'selected' : '' }}>Keluar</option>
            </select>
            @error('type')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="quantity">Jumlah</label>
            <input type="number" name="quantity" id="quantity" class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity', $transaction->quantity) }}">
            @error('quantity')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="transaction_date">Tanggal Transaksi</label>
            <input type="date" name="transaction_date" id="transaction_date" class="form-control @error('transaction_date') is-invalid @enderror" value="{{ old('transaction_date', \Carbon\Carbon::parse($transaction->transaction_date)->format('Y-m-d')) }}"
            >
            @error('transaction_date')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="form-group">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{{ old('description', $transaction->description) }}</textarea>
            @error('description')
              <span class="invalid-feedback">{{ $message }}</span>
            @enderror
          </div>

          <div class="d-flex justify-content-end">
            <a href="{{ route('transactions.index') }}" class="btn btn-outline-secondary mr-2">Batal</a>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection