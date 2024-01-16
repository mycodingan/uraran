<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class informasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pengirim',
        'gambar_informasi',
        'judul_informasi',
        'isi_informasi',
    ];
}
