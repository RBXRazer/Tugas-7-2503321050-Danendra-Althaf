@extends('layouts.app')

@section('title', 'Dashboard | MOTORHUB')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">

    <div>
        <h1 class="page-title">Motorcycle Dashboard</h1>
        <p class="page-subtitle">
            Manage and monitor your motorcycle inventory.
        </p>
    </div>

    <a href="{{ route('motor.create') }}" class="btn btn-danger px-4 py-3">
        <i class="bi bi-plus-lg me-2"></i>
        Add Motorcycle
    </a>

</div>

<!-- STATISTICS -->
<div class="row g-4 mb-5">

    <div class="col-md-4">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <p class="text-muted mb-2">Total Motorcycles</p>
                    <h2 class="fw-bold">{{ $totalMotor }}</h2>
                </div>

                <div class="stat-icon bg-danger-subtle text-danger">
                    <i class="bi bi-bicycle"></i>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <p class="text-muted mb-2">Total Stock</p>
                    <h2 class="fw-bold">{{ $totalStok }}</h2>
                </div>

                <div class="stat-icon bg-primary-subtle text-primary">
                    <i class="bi bi-box-seam"></i>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card p-4">
            <div class="d-flex justify-content-between align-items-center">

                <div>
                    <p class="text-muted mb-2">Inventory Value</p>
                    <h4 class="fw-bold">
                        Rp {{ number_format($totalNilai, 0, ',', '.') }}
                    </h4>
                </div>

                <div class="stat-icon bg-success-subtle text-success">
                    <i class="bi bi-cash-stack"></i>
                </div>

            </div>
        </div>
    </div>

</div>

<!-- DATABASE TABLE -->
<div class="card">

    <div class="card-body p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h5 class="fw-bold mb-1">Motorcycle Inventory</h5>
                <p class="text-muted small mb-0">
                    Complete motorcycle database
                </p>
            </div>

            <span class="badge bg-danger-subtle text-danger px-3 py-2">
                {{ $totalMotor }} Products
            </span>
        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Motorcycle</th>
                        <th>Specifications</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse ($motor as $item)

                    <tr>
                        <td>{{ $loop->iteration }}</td>

                        <td>
                            <strong>{{ $item->nama_produk }}</strong>
                        </td>

                        <td>
                            {{ $item->spesifikasi }}
                        </td>

                        <td class="fw-semibold">
                            Rp {{ number_format($item->harga_produk, 0, ',', '.') }}
                        </td>

                        <td>
                            <span class="badge bg-success-subtle text-success">
                                {{ $item->jumlah_produk }} Units
                            </span>
                        </td>

                        <td class="text-center">

                            <a href="{{ route('motor.edit', $item->id_sepeda_motor) }}"
                               class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil-square"></i>
                                Edit
                            </a>

                            <form
                                action="{{ route('motor.destroy', $item->id_sepeda_motor) }}"
                                method="POST"
                                class="d-inline"
                                onsubmit="return confirm('Are you sure you want to delete this motorcycle?')">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>

                            </form>

                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="6" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-3"></i>
                            No motorcycle data available.
                            <br>
                            Add your first motorcycle.
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection