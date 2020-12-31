<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservations_Detail extends Model
{
    protected $fillable = [
        'user_id', 'jumlah_orang', 'tanggal', 'jam'
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
