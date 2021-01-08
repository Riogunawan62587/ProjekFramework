<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    public $timestamps = false;

    protected $fillable = [
        'tanggal', 'jam', 'jumlah_orang', 'status', 'table_id', 'user_id'
    ];

    public function table()
    {
        return $this->belongsTo('App\Table', 'table_id');
    }
}
