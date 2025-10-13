<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FokusPenelitian extends Model
{
    protected $table = 'fokus_penelitian'; // nama tabel di database
    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];
}
