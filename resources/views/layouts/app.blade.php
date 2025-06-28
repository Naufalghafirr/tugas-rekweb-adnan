<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel with ajax</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/DataTables-1.13.3/css/dataTables.bootstrap5.min.css') }}">
</head>
<body>
    <div class="d-flex" style="min-height: 100vh">
        <div class="bg-danger text-white p-3" style="min-height: 220px; width: 200px">
            <div class="mb-4 text-center">
                <img src="{{ secure_asset('assets/image/logo.png') }}" alt="logo" class="img-fluid" style="max-width: 180px; height: auto;">
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/" class="nav-link text-white">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('mahasiswa') }}" class="nav-link text-white">Data Mahasiswa</a>
                </li>
                <li class="nav-item" >
                    <form action="{{ route('logout') }}" method="post">
                        @csrf

                        <button type="submit"
                            class="btn btn-link text-white p-0 m-0 align-baseline"
                            style="text-decoration: none;">
                            Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="flex-fill">
            <nav class="navbar navbar-expand-lg px-4 d-flex justify-content-between navbar-light bg-light">
                <div class="container-fluid">
                    <a href="/" class="navbar-brand">
                        <span class="text-danger">Sistem Informasi</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav"></ul>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="{{ secure_asset('assets/jquery-3.6.1.js') }}"></script>
    <script src="{{ secure_asset('assets/bootstrap.min.js') }}"></script>
    <script src="{{ secure_asset('assets/datatables.min.js') }}"></script>
    <script src="{{ secure_asset('assets/toastr.min.js') }}"></script>
    <script src="{{ secure_asset('assets/DataTables-1.13.3/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ secure_asset('assets/DataTables-1.13.3/js/jquery.dataTables.min.js') }}"></script>
    @yield('scripts')
</body>
</html>
