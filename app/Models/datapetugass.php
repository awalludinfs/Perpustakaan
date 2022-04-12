<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapetugass extends Model
{
    use HasFactory;
    protected $fillable=[
        'nip',
        'nama',
        'email',
        'status',
    ];

    protected $table="datapetugass";
}
