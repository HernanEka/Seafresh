@extends('Template')

@section('konten')
    <section class="DaftarPelatihanUser">
        <div class="container my-5">
            <div class="text-center mb-5">
                <h1 class="display-5">Daftar Pelatihan Yang Diikuti</h1>
            </div>
            <div class="row align-items-start border p-4">
                <div class="col-md-9 h-100">
                    <h3 class="card-title text-primary">Pelatihan 1</h3>
                    <p class="card-text text-primary">Tanggal Pelatihan</p>
                    15 Januari 2023 - 20 Januari 2023
                </div>
                <div class="col border-start">
                   <h5 class="mb-4">Status Pelatihan : Selesai</h5>
                   <a href="#" class="btn btn-primary w-100">Unduh Sertifikasi</a>
                </div>
            </div>
        </div>
    </section>
@endsection
