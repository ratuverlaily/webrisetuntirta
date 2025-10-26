<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtikelPenelitian extends Model
{
    use HasFactory;

    protected $table = 'artikel_penelitian';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $fillable = [
        'userid',
        'judul',
        'deskripsi',
        'tanggal',
        'link',
        'penulis',
        'image',
        'kategori',
    ];

    // Jika ingin relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'userid');
    }
}
