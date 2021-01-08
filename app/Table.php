<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    //
    protected $table = 'tables';

    protected $fillable = [
        'nama','kapasitas'
    ];

    public $timestamps = true;

    public function reservation()
    {
        return $this->hasMany('App\Reservation', 'table_id');
    }
}
