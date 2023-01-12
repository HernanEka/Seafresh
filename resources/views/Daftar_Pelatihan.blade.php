@extends('Template')

@section('konten')
    <section class="DaftarPelatihanUser">
        <div class="container my-5">
            <div class="text-center mb-5">
                <h1 class="display-5">Daftar Pelatihan Yang Diikuti</h1>
            </div>
            <div class="row align-items-start border p-4">
                @foreach ($pendaftaran as $daftar)
                    @foreach ($pelatihan as $data)
                        @if ($data->id == $daftar->pelatihan_id)
                            <div class="col-md-9 mb-2 h-100">
                                <h3 class="card-title text-primary">{{ $data->judul }}</h3>
                                <p class="card-text text-primary">Tanggal Pelatihan</p>
                                {{ $data->tanggal }}
                            </div>
                            <div class="col border-start">
                                <h5 class="mb-4">Status Pelatihan : {{ $daftar->status }}</h5>
                                @if ($daftar->status == 'selesai')
                                    <a href="#" class="btn btn-primary w-100">Unduh Sertifikasi</a>
                                @endif
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
