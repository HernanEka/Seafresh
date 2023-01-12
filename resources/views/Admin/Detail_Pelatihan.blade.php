@extends('Admin.Admin_Template')

@section('data')
    <div class="col p-5">
        <a href="/admin" class="text-decoration-none text-dark fs-4"><i class="bi bi-arrow-left"></i> Detail Pelatihan</a>
        <div class="text-center mb-5 w-100">
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
            <p>Sisa Kuota : {{ $pelatihan->kuota-$pelatihan->pendaftar }} Orang</p>
            <hr>
            <div class="mb-5 text-end">
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEdit">
                    Edit
                </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <form action="/admin/update-pelatihan/{{ $pelatihan->id }}" method="post">
        @csrf
        <div class="modal fade" id="ModalEdit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Pelatihan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-2">
                            <label for="judul" class="form-label">Judul Pelatihan</label>
                            <input type="text" name="judul" id="judul" class="form-control" value="{{ $pelatihan->judul }}">
                        </div>
                        <div class="mb-2">
                            <label for="deskripsi" class="form-label">Deskripsi Pelatihan</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5">{{ $pelatihan->deskripsi }}</textarea>
                        </div>
                        <div class="mb-2">
                            <label for="kuota" class="form-label">Kuota Pelatihan</label>
                            <input type="number" name="kuota" id="kuota" class="form-control" value="{{ $pelatihan->kuota }}">
                        </div>
                        <div class="mb-2">
                            <label for="pendaftaran" class="form-label">Batas Daftar Pelatihan</label>
                            <input type="date" name="pendaftaran" id="pendaftaran" class="form-control" value="{{ $pelatihan->batas_daftar }}">
                        </div>
                        <div class="mb-2">
                            <label for="tanggal" class="form-label">Tanggal Pelatihan</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $pelatihan->tanggal }}">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
