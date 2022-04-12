<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datamembers extends Model
{
    use HasFactory;
    protected $fillable= [
        'nama',
        'kelas',
        'jurusan',
        'nisn',
    ];

    protected $table="datamembers";
}

