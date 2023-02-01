@extends('layouts.main')

@section('content')
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-6">
                <h3>Pencarian bantuan sosial kecamatan parungpanjang</h3>
            </div>
            <div class="col-sm-6">
                <form action="/search">
                    <input required type="text" name="search" id="search" placeholder="Cari Bantuan Sosial" class="form-control" value="{{request('search')}}">
                    <button class="btn btn-primary mt-2" type="submit">Check</button>
                </form>
            </div>
        </div>
    </div>
@endsection
