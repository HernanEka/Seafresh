<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <title>Admin Seafresh</title>
</head>

<body>

    <div class="d-flex">
        <div class="col-md-2 min-vh-100 bg-primary p-3 text-white">
            <div class="text-center">
                <i class="bi bi-person-circle display-1"></i>
                <h1 class="fs-3 mb-3">Admin</h1>
                <a href="#" class="btn btn-warning px-5 mb-5">Logout</a>
            </div>
            <div class="sidebar-navbar p-3">
                <div class="nav-item">
                    <a href="/admin" class="text-decoration-none text-white">Data Pelatihan</a>
                </div>
                <div class="nav-item">
                    <a href="/admin/data-pendaftaran" class="text-decoration-none text-white">Data Pendaftar</a>
                </div>
            </div>
        </div>

        @yield('data')


    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
