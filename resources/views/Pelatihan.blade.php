@extends('Template')

@section('konten')
    <section id="Pelatihan">
        <div class="container my-5">
            <div class="text-center mb-5">
                <h1 class="display-5">Daftar Pelatihan</h1>
            </div>

            <div class="row g-5">
                @foreach ($pelatihan as $data)
                <div class="col-md-6">
                    <a href="/pelatihan/detail" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-primary">{{ $data->judul }}</h3>
                                <p>Kuota : {{ $data->kuota }} orang | Parisipan : {{ $data->pendaftar }} orang | Sisa Kuota : {{ $data->kuota-$data->pendaftar }} orang</p>
                                <p class="card-text text-primary">Tanggal Pelatihan</p>
                                {{ \Carbon\Carbon::parse($data->tanggal)->format('j F Y') }}
                            </div>
                            <div class="card-footer bg-white d-flex">
                                <div class="col mt-1">Batas Pendaftaran : {{ \Carbon\Carbon::parse($data->batas_daftar)->format('j F Y') }}</div>
                                <div class="col text-end">
                                    <a href="/pelatihan/detail/{{ $data->id }}" class="btn btn-primary">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
