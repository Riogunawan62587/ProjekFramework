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
}
