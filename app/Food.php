<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    public $timestamps = false;

    protected $fillable = [
        'nama', 'tipe', 'deskripsi', 'harga', 'gambar'
    ];
}
