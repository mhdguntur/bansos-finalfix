<?php

namespace App\Http\Controllers;

use App\Http\Requests\PelayananRequest;
use App\Models\Pelayanan;
use App\Models\User;
// use App\Models\Pendaftaran;

class PelayananController extends Controller
{
    public function index()
    {
        // $pelayanan = User::latest();
        // if(request('search')){
        //     $pelayanan -> where('nama', 'like', '%' . request('search') . '%');
        // }

        return view('pelayanan.pelayanan', [
            'title' => 'Pelayanan',
            'pelayanan' => Pelayanan::latest()->get(),
            // 'umkm' => User::latest()->get()
        ]);
    }
    public function search()
    {
        $pencarian = User::latest();
        if(request('search')){
             $pencarian -> where('nik', 'like', '%' . request('search') . '%');
         }


        return view('pelayanan.search', [
            'title' => 'Bansos',
            'pencarian' => $pencarian->get(),
            // 'umkm' => User::latest()->get()
        ]);
    }
    public function cetak()
    {
        return view('pelayanan.cetak', [
            'title' => 'Cetak',
        ]);
    }
    public function home()
    {
        return view('pelayanan.home', [
            'title' => 'Home',
        ]);
    }

    public function show(Pelayanan $pelayanan)
    {
        return view('pelayanan.show', [
            'title' => 'Konsultasi Bisnis',
            'pelayanan' => $pelayanan
        ]);
    }

    public function create(Pelayanan $pelayanan)
    {
        return view('pelayanan.create', [
            'title' => 'Daftar ' . $pelayanan->judul,
            'pelayanan' => $pelayanan
        ]);
    }

    // public function store(PelayananRequest $request)
    // {
    //     $data = $request->validated();

    //     Pendaftaran::create($data);
    //     return redirect('pelayanan/daftar/sukses');
    // }
}
