@extends('Admin.Admin_Template')

@section('data')
    <div class="col p-5">
        <div class="text-center mb-5">
            <h1 class="display-5">Data Pesan Masuk</h1>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pengirim</th>
                    <th scope="col">Email Pengirim</th>
                    <th scope="col">Pesan</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($pesan as $data)
                    <tr>
                        <th scope="row">{{ $i++ }}</th>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->pesan }}</td>
                        {{-- <td>
                            <a href="#" class="btn btn-warning"><i
                                    class="bi bi-pencil text-white"> Ubah Status</i></a>
                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
