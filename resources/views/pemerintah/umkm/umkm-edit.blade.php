@extends('layouts.pemerintah')

@section('content')
    <div class="row mt-4">
        <div class="col">
            <p class="text-secondary">Dashboard &nbsp; /
                &nbsp; <span class="text-dark font-weight-bold"><a href="{{ url('pemerintah/umkm') }}"
                        class="text-dark">UMKM</a></span></p>
            <div class="mt-2">
                @include('components.flash_message')
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-8">
            <form action="{{ route('umkm.update', $umkm->id) }}" method="post">
                @method('put')
                @csrf
                <div class="form-group mb-3">
                    <label for="nama">Nama Pemilik*</label>
                    <input type="text" value="{{ old('nama', $umkm->nama) }}" name="nama" id="nama"
                        class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="status">Status*</label>
                    <select type="text" name="status" id="status" class="form-control @error('status') is-invalid @enderror">
                        <option value="{{ old('status', $umkm->status)}}">{{ old('status', $umkm->status)}}</option>
                        <option value="Sudah Diambil">Sudah Diambil</option>
                        <option value="Belum Diambil">Belum Diambil</option>
                    </select>
                    @error('status')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn py-2 btn-success d-block float-right" style="width: 140px;">Edit
                    Data</button>
            </form>
        </div>
    </div>
@endsection
