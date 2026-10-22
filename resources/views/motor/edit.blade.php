@extends('layouts.app')

@section('title', 'Edit Motorcycle | MOTORHUB')

@section('content')

<div class="mb-4">
    <a href="{{ route('motor.index') }}" class="text-decoration-none text-secondary">
        <i class="bi bi-arrow-left me-2"></i>
        Back to Dashboard
    </a>
</div>

<div class="mb-4">
    <h1 class="page-title">Edit Motorcycle</h1>
    <p class="page-subtitle">
        Update motorcycle information in your inventory.
    </p>
</div>

<div class="card">
    <div class="card-body p-4 p-md-5">

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Please check your input:</strong>

                <ul class="mb-0 mt-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('motor.update', $motor->id_sepeda_motor) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="form-label fw-semibold">
                    Motorcycle Name
                </label>

                <input type="text"
                       name="nama_produk"
                       class="form-control"
                       value="{{ old('nama_produk', $motor->nama_produk) }}"
                       required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">
                    Specifications
                </label>

                <textarea name="spesifikasi"
                          class="form-control"
                          rows="4"
                          required>{{ old('spesifikasi', $motor->spesifikasi) }}</textarea>
            </div>

            <div class="row">

                <div class="col-md-6 mb-4">
                    <label class="form-label fw-semibold">
                        Price (IDR)
                    </label>

                    <input type="number"
                           name="harga_produk"
                           class="form-control"
                           value="{{ old('harga_produk', $motor->harga_produk) }}"
                           min="0"
                           step="1"
                           required>
                </div>

                <div class="col-md-6 mb-4">
                    <label class="form-label fw-semibold">
                        Stock Quantity
                    </label>

                    <input type="number"
                           name="jumlah_produk"
                           class="form-control"
                           value="{{ old('jumlah_produk', $motor->jumlah_produk) }}"
                           min="0"
                           step="1"
                           required>
                </div>

            </div>

            <div class="d-flex gap-3">

                <button type="submit" class="btn btn-danger px-4 py-3">
                    <i class="bi bi-check-lg me-2"></i>
                    Update Motorcycle
                </button>

                <a href="{{ route('motor.index') }}"
                   class="btn btn-outline-secondary px-4 py-3">
                    Cancel
                </a>

            </div>

        </form>

    </div>
</div>

@endsection