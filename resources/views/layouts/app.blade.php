<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'MOTORHUB')</title>

    <!-- Bootstrap 5 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>
        :root {
            --dark: #16191f;
            --sidebar: #1e222a;
            --accent: #e63946;
            --background: #f3f5f8;
        }

        body {
            background: var(--background);
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: var(--sidebar);
            position: fixed;
            left: 0;
            top: 0;
            padding: 30px 20px;
        }

        .brand {
            color: white;
            font-size: 27px;
            font-weight: 800;
            text-decoration: none;
            letter-spacing: 1px;
        }

        .brand span {
            color: var(--accent);
        }

        .sidebar-label {
            color: #777e89;
            font-size: 12px;
            letter-spacing: 2px;
            margin-top: 50px;
            margin-bottom: 20px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 14px 16px;
            color: #b7bdc8;
            text-decoration: none;
            border-radius: 10px;
            margin-bottom: 8px;
            transition: 0.3s;
        }

        .sidebar-link:hover,
        .sidebar-link.active {
            background: var(--accent);
            color: white;
        }

        .main-content {
            margin-left: 260px;
            padding: 35px;
        }

        .page-title {
            font-size: 28px;
            font-weight: 800;
            color: var(--dark);
        }

        .page-subtitle {
            color: #8b9099;
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.04);
        }

        .stat-icon {
            width: 55px;
            height: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 14px;
            font-size: 25px;
        }

        .btn-danger {
            background: var(--accent);
            border-color: var(--accent);
        }

        .btn-danger:hover {
            background: #c92c39;
            border-color: #c92c39;
        }

        .table thead th {
            background: #f8f9fc;
            color: #777;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            padding: 18px;
        }

        .table tbody td {
            padding: 18px;
            vertical-align: middle;
        }

        .form-control {
            padding: 12px;
            border-radius: 9px;
        }

        @media (max-width: 991px) {
            .sidebar {
                position: relative;
                width: 100%;
                min-height: auto;
            }

            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <a href="{{ route('motor.index') }}" class="brand">
            MOTOR<span>HUB.</span>
        </a>

        <p class="sidebar-label">MAIN MENU</p>

        <nav>
            <a href="{{ route('motor.index') }}"
               class="sidebar-link {{ request()->routeIs('motor.index') ? 'active' : '' }}">
                <i class="bi bi-grid-fill"></i>
                Dashboard
            </a>

            <a href="{{ route('motor.create') }}"
               class="sidebar-link {{ request()->routeIs('motor.create') ? 'active' : '' }}">
                <i class="bi bi-plus-circle"></i>
                Add Motorcycle
            </a>
        </nav>

        <div class="mt-5 pt-5 text-secondary small">
            <p class="mb-1">MOTORHUB SYSTEM</p>
            <p>Laravel + Bootstrap</p>
        </div>

    </aside>

    <!-- MAIN CONTENT -->
    <main class="main-content">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i>
                {{ session('success') }}

                <button type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"></button>
            </div>
        @endif

        @yield('content')

    </main>

    <!-- BOOTSTRAP JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')

</body>
</html>