<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wisata extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable = [
        'gambar_wisata',
        'nm_wisata',
        'kategori',
        'alamat_wisata',
        'latitude',
        'longitude',
        'deskripsi',
        'fasilitas',
        'jam_operasional',
        'telepon',
        'hrg_tiket',
    ];
    protected $table = 'table_wisata';
}
