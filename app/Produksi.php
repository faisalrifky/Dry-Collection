<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produksi extends Model
{
     protected $fillable = ['foto','deskripsi'];
    public $timestamps = true;
}
