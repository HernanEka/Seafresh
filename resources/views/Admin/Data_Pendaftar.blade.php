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
                            <a href="#" class="btn btn-warning"><i
                                    class="bi bi-pencil text-white"> Ubah Status</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
