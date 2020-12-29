<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations_Detail extends Model
{
    protected $fillable = [
        'nama_lengkap', 'nomor_telepon', 'email', 'jumlah_orang', 'tanggal', 'jam'
    ];
}
