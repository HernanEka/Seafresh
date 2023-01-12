@extends('Admin.Admin_Template')

@section('data')
    <div class="col p-5">
        <h1 class="display-5 mb-4">Data Pelatihan</h1>
        <div class="text-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalTambah">
                Tambah Data +
            </button>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Judul Pelatihan</th>
                    <th scope="col">Kuota</th>
                    <th scope="col">Pendaftar</th>
                    <th scope="col">Batas Pendaftaran</th>
                    <th scope="col">Tanggal Pelatihan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($pelatihan as $data)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $data->judul }}</td>
                        <td>{{ $data->kuota }} Orang</td>
                        <td>{{ $data->pendaftar }} Orang</td>
                        <td>{{ \Carbon\Carbon::parse($data->batas_daftar)->format('j F Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($data->tanggal)->format('j F Y') }}</td>
                        <td>
                            <a href="/admin/detail-pelatihan/{{ $data->id }}" class="btn btn-warning"><i class="bi bi-pencil text-white"></i></a>
                            <a href="/admin/delete-pelatihan/{{ $data->id }}" class="btn btn-danger"><i
                                    class="bi bi-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


    <!-- Modal -->
    <form action="/admin/input-pelatihan" method="post">
        @csrf
        <div class="modal fade" id="ModalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                            <input type="text" name="judul" id="judul" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="deskripsi" class="form-label">Deskripsi Pelatihan</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control" rows="5"></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="kuota" class="form-label">Kuota Pelatihan</label>
                            <input type="number" name="kuota" id="kuota" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="pendaftaran" class="form-label">Batas Daftar Pelatihan</label>
                            <input type="date" name="pendaftaran" id="pendaftaran" class="form-control">
                        </div>
                        <div class="mb-2">
                            <label for="tanggal" class="form-label">Tanggal Pelatihan</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
