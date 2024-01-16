<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absensikehadiran extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pembayar',
        'laporan_pembayaran',
        'nominal_pembayaran',
        'tanggal_pembayaran',
    ];
}
