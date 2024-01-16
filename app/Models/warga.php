<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warga extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto_ktp',
        'nama_warga',
        'nomor_kk',
        'jumlah_keluarga',
        'alamat_rumah',
        'pekerjaan',
    ];
}
