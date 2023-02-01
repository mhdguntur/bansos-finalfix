@extends('layouts.main')

@section('content')
    <div class="row mt-5 d-flex justify-content-center">
        <div class="col-lg-6 col-sm-12">
            <h2 class="text-center" style="font-weight: 800">Bantuan Sosial</h2>
            <p class="mt-3 text-center">Kecamatan Parung Panjang</p>
        </div>
    </div>

    <div class="row">
        @forelse ($pencarian as $data)
            <div class="card mb-3">
                <div class="row">
                <div class="col-md-4">
                    @if ($data->url_ktp)
                        <img src="{{ asset('storage/' . $data->url_foto) }}" class="img-fluid" >
                    @else
                        <img src="{{ asset('img/asset/qr-code.png') }}" class="card-img-top">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="card-title">{{ $data->nama }}</h5>
                    <p class="card-text">{{ $data->roles}}</p>
                    <p class="card-text">{{ $data->status}}</p>
                    <p class="card-text"><small class="text-muted">{{ $data->created_at}}</small></p>
                    <a href="{{ url('/cetak') }}"
                        class="btn btn-success mt-4">Cetak</a>
                </div>
                </div>
                </div>
            </div>

            {{-- <div class="col-lg-3 col-sm-12 mb-3">
                <a href="{{ url('pelayanan/' . $data->judul) }}" class="text-decoration-none text-dark">
                    <div class="card">
                        @if ($data->url_foto)
                            <img src="{{ asset('storage/' . $data->url_foto) }}" class="img-fluid" >
                        @else
                            <img src="https://source.unsplash.com/random/300x200" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $data->judul }}</h5>
                            <a href="{{ url('pelayanan/' . $data->judul . '/daftar') }}"
                                class="btn btn-success mt-4">Daftar</a>
                        </div>
                    </div>
                </a>
            </div> --}}
        @empty
            <h3 class="mx-auto mt-4 font-weight-bold">Data Bansos Tidak Sesuai.</h3>
        @endforelse
    </div>
@endsection
