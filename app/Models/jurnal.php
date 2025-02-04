<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jurnal extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'abstrak',
        'author',
        'keyword',
        'halaman',
        'date_publish',
        'id_kategori_jurnal',
        'file',
        'id_user',
    ];

    public function kategoriJurnal()
    {
        return $this->belongsTo(KategoriJurnal::class, 'id_kategori_jurnal');
    }

    // Relasi ke tabel users
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
