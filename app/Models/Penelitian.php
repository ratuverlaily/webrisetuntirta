<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = 'hibah_penelitian'; // sesuaikan dengan nama tabel di database

    protected $fillable = [
        'userid',
        'tahun',
        'jenis_hibah',
        'judul_penelitian',
        'pendanaan',
        'link',
    ];

}
