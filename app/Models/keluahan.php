<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keluahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_pengeluh',
        'judul_keluhan',
        'isi_keluhan',
    ];
}
