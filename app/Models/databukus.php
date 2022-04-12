<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class databukus extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama_buku',
        'jenis_buku',
        'penulis_buku',
        'penerbit_buku',
        'jumlah_buku',
        'status',
    ];
    protected $table="databukus";
}

