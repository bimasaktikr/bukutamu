<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TujuanKunjungan;

class TujuanKunjungansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TujuanKunjungan::create(
            ['tujuankunjungan_type'     => 'Studi Banding']
        );
        TujuanKunjungan::create(
            ['tujuankunjungan_type'     => 'Bertemu Pegawai']
        );
    }
}