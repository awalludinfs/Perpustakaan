<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjamas extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama',
        'email',
        'kelas',
        'nisn',
        'nama_buku',
        'tanggal_pinjam',
        'tanggal_kembali',
        'denda',
    ];

    protected $table="peminjamas";
}
