<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tentang extends Model
{
    protected $fillable = ['gambar','deskripsi'];
    public $timestamps = true;
}

