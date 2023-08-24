<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NamaPegawai;

class NamaPegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NamaPegawai::create(
            ['namapegawai_type'     => 'Anggi Fatwa Mauliza, A.Md.Kb.N.']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Baqtiar Arifin']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Bima Sakti Krisdianto, SST']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Christiayu Natalia, SST']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Eka Prahara Resbiyanti, A.Md']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Erny Fatma Setyoharini, SE, MM']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Heru Kartiko, S.ST']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Ir. Agustina Martha, MM']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Ir. Dwi Handayani Prasetyawati, M.AP']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Ir. Ernawaty, MM']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Ir. Lies Alfiah']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Ir. Rahmi Veronika']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Ir. Wahyu Furqan']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Rachmad Widi Wijayanto']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Ratri Adhipradani Ratih, S.Si']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Rendra Anandhika']
        );
        
        NamaPegawai::create(
            ['namapegawai_type'     => 'Rhyke Chrisdiana Novita, SE']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Rizky Maulidya, SST']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Rony Mugiartono']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Saras Wati Utami, S.Si, M.E']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Saruni Gincahyo, SE']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Satria Candra Wibawa, A.Md']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Siti Barokatum Solihah, SST']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Soekesi Irawati, S.Psi, MM']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Tasmilah, SST']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Windi Wijayanti, S. Si, M.E']
        );
        NamaPegawai::create(
            ['namapegawai_type'     => 'Yusuf Fatoni, SE']
        );
    }
}