<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'tanggal', 'judul', 'deskripsi', 'gambar'
    ];
    public $timestamps = false;
}
