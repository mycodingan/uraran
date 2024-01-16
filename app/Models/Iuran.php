<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iuran extends Model
{
    use HasFactory; 
        protected $fillable = [
        'nama_pengeluh',
        'judul_keluhan',
        'isi_keluhan',
        'jumlah_iuran',
    ];


}
