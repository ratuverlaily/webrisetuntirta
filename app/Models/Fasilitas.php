<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas_laboratorium';

    protected $fillable = [
        'userid',
        'nama',
        'deskripsi',
        'gambar',
    ];

    // Jika menggunakan timestamp default (created_at & updated_at)
    public $timestamps = true;
}
