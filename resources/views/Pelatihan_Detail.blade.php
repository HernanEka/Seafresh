@extends('Template')

@section('konten')
    <section id="Detail">
        <div class="container my-5">
            <div class="text-center mb-5">
                <h1 class="display-5 text-capitalize">{{ $pelatihan->judul }}</h1>
            </div>
            <div class="mb-3">
                <h1 class="fs-2">Deskripsi</h1>
                <p class="text-justify">
                    {{ $pelatihan->deskripsi }}
                </p>
                <hr>
            </div>
            <div class="mb-3">
                <h1 class="fs-2">Tanggal Pelatihan</h1>
                <p>{{ \Carbon\Carbon::parse($pelatihan->tanggal)->format('j F Y') }}</p>
                <hr>
            </div>
            <div class="mb-3">
                <h1 class="fs-2">Keterangan</h1>
                <p>Batas Pendaftaran : {{ \Carbon\Carbon::parse($pelatihan->batas_daftar)->format('j F Y') }}</p>
                <p>Kuota : {{ $pelatihan->kuota }} Orang</p>
                <p>Partisipasi Sekarang : {{ $pelatihan->pendaftar }} Orang</p>
                <p>Sisa Kuota : {{ $pelatihan->kuota - $pelatihan->pendaftar }} Orang</p>
                <hr>
                <div class="mb-5 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalDaftar">
                        Daftar Pelatihan
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="ModalDaftar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
        </div>
    </div>
@endsection
