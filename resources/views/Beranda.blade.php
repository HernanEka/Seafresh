@extends('Template')


@section('konten')
    <section id="Header">
        <div class="header vh-100">
            <div class="text-center header-text">
                <h1 class="display-3 text-white mb-2 fw-bold">Berlatih Budidaya Ikan Bersama Kami</h1>
                <h1 class="display-1 text-white">SEAFRESH</h1>
            </div>
        </div>
    </section>

    <section id="Profile Perusahaan" class="bg-white">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="display-4">Tentang Kami</h1>
            </div>
            <div class="row g-5">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('gambar/perusahaan/logo.png') }}" alt="" class="card-img-top">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <h1 class="fs-1 mb-3">SEAFRESH</h1>
                    <p class="text-justify">ini nanti kalian ganti aja<br> ipsum dolor sit amet consectetur adipisicing
                        elit. Animi, nesciunt numquam voluptatum tenetur doloribus labore, magni veniam esse aspernatur,
                        pariatur quam blanditiis itaque ducimus impedit tempore distinctio nemo similique sint.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="Layanan" class="bg-light text-primary py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h1 class="display-4">Layanan Kami</h1>
            </div>

            <div class="row g-5">
                <div class="col text-center">
                    <a class="text-decoration-none" href="/artikel">
                        <h1 class="display-1"><i class="bi bi-newspaper"></i></h1>
                        <h1 class="fs-3">Artikel</h1>
                    </a>
                </div>

                <div class="col text-center">
                    <a class="text-decoration-none" href="/pelatihan">
                        <h1 class="display-1"><i class="bi bi-mortarboard"></i></h1>
                        <h1 class="fs-3">Pelatihan</h1>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="contactUs">
        <div class="container my-5">
            <div class="text-center">
                <h1 class="display-5">Kontak Kami</h1>
            </div>
            <form action="/kontak" method="post">
                @csrf
                <div class="row g-5 mb-2">
                    <div class="col">
                        <label for="nama" class="form-label">Nama Pengirim</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email Pengirim</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                </div>
                <label for="pesan" class="form-label">Isi Pesan</label>
                <textarea name="pesan" id="pesan" rows="10" class="form-control"></textarea>
                <div class="text-end mt-3">
                    <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </div>
            </form>
        </div>
    </section>
@endsection
