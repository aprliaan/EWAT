<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanHarian extends Model
{
    use HasFactory;

    // protected $table = 

    protected $fillable = [
        'Tanggal',
        'Waktu'
    ];
}
