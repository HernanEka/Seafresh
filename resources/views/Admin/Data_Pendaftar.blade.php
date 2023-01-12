@extends('Admin.Admin_Template')

@section('data')
    <div class="col p-5">
        <h1 class="display-5 mb-4">Data Pelatihan</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">User ID</th>
                    <th scope="col">Pelatihan ID</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($pendaftaran as $data)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $data->user_id }}</td>
                        <td>{{ $data->pelatihan_id }}</td>
                        <td>{{ $data->status }}</td>
                        <td>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#UbahStatus{{ $data->id }}">
                                <i class="bi bi-pencil text-white"> Ubah
                                    Status</i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    @foreach ($pendaftaran as $data)
        <form action="/admin/ubah-status/{{ $data->id }}" method="post">
            @csrf
            <div class="modal fade" id="UbahStatus{{ $data->id }}" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Ubah Status Pendaftar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <select name="status" id="status" class="form-select">
                                <option value="terdaftar" @if($data->status == 'terdaftar') selected @endif>terdaftar</option>
                                <option value="lulus" @if($data->status == 'lulus') selected @endif>lulus</option>
                                <option value="tidak lulus" @if($data->status == 'tidak lulus') selected @endif>tidak lulus</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-warning">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
