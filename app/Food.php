<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    protected $fillable = [
        'nama','tipe', 'deskripsi', 'harga', 'gambar'
    ];

    public $timestamps = true;
}
