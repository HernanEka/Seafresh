@extends('Template')

@section('konten')
    <section id="Pelatihan">
        <div class="container my-5">
            <div class="text-center mb-5">
                <h1 class="display-5">Daftar Pelatihan</h1>
            </div>

            <div class="row g-5">
                @for ($i = 0; $i <5 ; $i++)
                <div class="col-md-6">
                    <a href="/pelatihan/detail" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="card-title text-primary">Pelatihan 1</h3>
                                <p>Kuota : 20 orang | Parisipan : 7 orang | Sisa Kuota : 13 orang</p>
                                <p class="card-text text-primary">Tanggal Pelatihan</p>
                                15 Januari 2023 - 20 Januari 2023
                            </div>
                            <div class="card-footer bg-white d-flex">
                                <div class="col mt-1">Batas Pendaftaran 12 Januari 2023</div>
                                <div class="col text-end">
                                    <a href="/pelatihan/detail" class="btn btn-primary">Daftar</a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
