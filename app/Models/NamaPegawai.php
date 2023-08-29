<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NamaPegawai extends Model
{
    protected $guarded=['id'];
    protected $table = "nama_pegawai";
    protected $fillable = ['namapegawai_type'];
    use HasFactory;
}
