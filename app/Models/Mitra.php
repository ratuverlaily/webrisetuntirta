<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;

    // Nama tabel (opsional, jika tidak sesuai konvensi plural)
    protected $table = 'mitra';

    // Primary key
    protected $primaryKey = 'id';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'userid',
        'nama_instansi',
        'foto_logo',
        'link_website',
        'deskripsi',
    ];

    // Jika menggunakan timestamp default (created_at & updated_at)
    public $timestamps = true;
}
