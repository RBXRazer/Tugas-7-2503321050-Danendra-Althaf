@extends('layouts.app')

@section('title', 'Add Motorcycle | MOTORHUB')

@section('content')

<div class="mb-4">
    <a href="{{ route('motor.index') }}" class="text-decoration-none text-secondary">
        <i class="bi bi-arrow-left me-2"></i>
        Back to Dashboard
    </a>
</div>

<div class="mb-4">
    <h1 class="page-title">Add New Motorcycle</h1>
    <p class="page-subtitle">
        Enter motorcycle information to add it to inventory.
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

        <form action="{{ route('motor.store') }}" method="POST">

            @csrf

            <div class="mb-4">
                <label class="form-label fw-semibold">
                    Motorcycle Name
                </label>

                <input type="text"
                       name="nama_produk"
                       class="form-control"
                       value="{{ old('nama_produk') }}"
                       placeholder="Example: Yamaha MT-25"
                       required>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">
                    Specifications
                </label>

                <textarea name="spesifikasi"
                          class="form-control"
                          rows="4"
                          placeholder="Enter motorcycle specifications"
                          required>{{ old('spesifikasi') }}</textarea>
            </div>

            <div class="row">

                <div class="col-md-6 mb-4">
                    <label class="form-label fw-semibold">
                        Price (IDR)
                    </label>

                    <input type="number"
                           name="harga_produk"
                           class="form-control"
                           value="{{ old('harga_produk') }}"
                           min="0"
                           step="1"
                           placeholder="58000000"
                           required>
                </div>

                <div class="col-md-6 mb-4">
                    <label class="form-label fw-semibold">
                        Stock Quantity
                    </label>

                    <input type="number"
                           name="jumlah_produk"
                           class="form-control"
                           value="{{ old('jumlah_produk') }}"
                           min="0"
                           step="1"
                           placeholder="10"
                           required>
                </div>

            </div>

            <div class="d-flex gap-3">

                <button type="submit" class="btn btn-danger px-4 py-3">
                    <i class="bi bi-check-lg me-2"></i>
                    Save Motorcycle
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