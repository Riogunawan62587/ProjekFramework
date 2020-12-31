<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';

    protected $fillable = [
        'tanggal','jam','jumlah_orang','status','table_id','user_id'
    ];
}
