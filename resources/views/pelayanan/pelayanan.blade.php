@extends('layouts.main')

@section('content')
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center" style="font-weight: 800">PUBLIKASI</h2>
            <p class="mt-3 text-center">Kanal Publikasi Kecamatan Parung Panjang</p>
        </div>
    </div>

    <div class="row">
        @forelse ($pelayanan as $data)

            <div class="col-lg-3 col-sm-12 mb-3">
                <a href="{{ url('pelayanan/' . $data->judul) }}" class="text-decoration-none text-dark">
                    <div class="card" style="min-height: 25rem">
                        @if ($data->url_foto)
                            <img src="{{ asset('storage/' . $data->url_foto) }}" class="img-fluid" >
                        @else
                            <img src="https://source.unsplash.com/random/300x200" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->judul }}</h5>
                            <h5 class="card-title">{{ $data->deskripsi   }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @empty
            <h3 class="mx-auto mt-4 font-weight-bold">Data Bansos Tidak Sesuai.</h3>
        @endforelse
    </div>
@endsection
