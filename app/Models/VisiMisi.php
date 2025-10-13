<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisiMisi extends Model
{
    use HasFactory;

    protected $table = 'visimisi';

    // Jika menggunakan timestamp default (created_at & updated_at)
    public $timestamps = true;

    protected $fillable = [
        'title',
        'content',
    ];
}
