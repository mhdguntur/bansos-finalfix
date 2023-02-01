<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Produk;
use App\Models\Pelayanan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'KEC. PARUNGPANJANG',
            'email' => 'pemerintah@email.gov',
            'roles' => 'Pemerintah',
            'Status' => 'Sudah Diambil',
            'password' => bcrypt('b4nsosjayajaya')
        ]);
        User::create([
            'nama' => 'Masyarakat A',
            'email' => 'abdi@email.com',
            'nik' => '123',
            'roles' => 'Masyarakat',
            'Status' => 'Belum Diambil',
            'password' => bcrypt('b4nsosjayajaya')
        ]);
        User::create([
            'nama' => 'Masyarakat B',
            'email' => 'guntur@email.com',
            'nik' => '456',
            'roles' => 'Masyarakat',
            'Status' => 'Sudah Diambil',
            'password' => bcrypt('b4nsosjayajaya')
        ]);
        Pelayanan::factory(5)->create();

    }
}
