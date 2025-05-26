<?php
// app/Models/DetailBarang.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_barang',
        'merk',
        'plat_nomor',
        'warna',
        'status_barang',
        'kondisi_barang',
        'lokasi',
        'tanggal_penerimaan',
        'keterangan',
    ];
}
