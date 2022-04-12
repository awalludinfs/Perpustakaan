<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapembayaran extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'email',
        'kelas',
        'jurusan',
        'nama_buku',
        'tanggal_kembali',
        'denda',
    ];

    protected $table="datapembayaran";
}
