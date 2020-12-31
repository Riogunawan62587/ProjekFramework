<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations_Detail extends Model
{
    public $timestamps = false;
    protected $table = 'reservations_details';

    protected $fillable = [
        'user_id', 'jumlah_orang', 'tanggal', 'jam'
    ];
}
