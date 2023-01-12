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
    <title>Seafresh</title>
</head>

<body>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top border-bottom">
        <div class="container-fluid">
            <a class="navbar-brand" href="/"><img src="{{ asset('gambar/perusahaan/logo.png') }}" alt=""
                    width="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/artikel">Artikel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/pelatihan">Pelatihan</a>
                    </li>
                </ul>
                <button type="button" class="btn btn-outline-primary me-3" data-bs-toggle="modal"
                    data-bs-target="#modalRegister">
                    Daftar
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalLogin">
                    Login
                </button>
            </div>
        </div>
    </nav>

    <!-- Modal Login -->
    <div class="modal fade" id="modalLogin" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-4 text-primary w-100" id="staticBackdropLabel">Login</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput" class="text-primary">Alamat Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-primary">Password</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100">Login</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Register -->
    <div class="modal fade" id="modalRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h1 class="modal-title fs-4 text-primary w-100" id="staticBackdropLabel">Daftar Akun</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInputNama"
                            placeholder="Nama Lengkap">
                        <label for="floatingInputNama" class="text-primary">Nama Lengkap</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInputNama"
                            placeholder="Nama Lengkap">
                        <label for="floatingInputNama" class="text-primary">Nomor Telepon</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput"
                            placeholder="name@example.com">
                        <label for="floatingInput" class="text-primary">Alamat Email</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword" class="text-primary">Password</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary w-100">Daftar</button>
                </div>
            </div>
        </div>
    </div>

    {{-- navbar end --}}

    @yield('konten')


    <!-- Footer -->
    <footer class="text-center text-lg-start text-white bg-primary">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class=" navbar-brand mb-4 font-weight-bold">
                            Seafresh
                        </h6>
                        <p>
                            Seafresh merupakan perusahaan pelatihan budidaya ikan.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Artikel</h6>
                        <p>
                            <a href="/artikel" class="text-white">Artikel Budidaya</a>
                        </p>
                        {{-- <p>
                            <a class="text-white">Artikel 2</a>
                        </p>
                        <p>
                            <a class="text-white">Artikel 3</a>
                        </p>
                        <p>
                            <a class="text-white">Artikel 4</a>
                        </p> --}}
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            Pelatihan
                        </h6>
                        <p>
                            <a class="text-white">Pelatihan 1</a>
                        </p>
                        <p>
                            <a class="text-white">Pelatihan 2</a>
                        </p>
                        <p>
                            <a class="text-white">Pelatihan 3</a>
                        </p>
                        <p>
                            <a class="text-white">Pelatihan 4</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Tentang Kami</h6>
                        <p><i class="bi bi-house mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="bi bi-envelope mr-3"></i> info@gmail.com</p>
                        <p><i class="bi bi-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="bi bi-printer mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!--Grid row-->
            </section>
            <!-- Section: Links -->

            <hr class="my-3">

            <!-- Section: Copyright -->
            <section class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <!-- Copyright -->
                        <div class="p-3">
                            © 2023 Copyright:
                            <a class="text-white">Seafresh</a>
                        </div>
                        <!-- Copyright -->
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="bi bi-facebook"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="bi bi-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="bi bi-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
                                class="bi bi-instagram"></i></a>
                    </div>
                    <!-- Grid column -->
                </div>
            </section>
            <!-- Section: Copyright -->
        </div>
        <!-- Grid container -->
    </footer>
    <!-- Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
