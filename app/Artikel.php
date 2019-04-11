<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = ['judul','konten','slug','kategori_artikel_id','foto','publish'];
    public $timestamps = true;

    public function KategoriArtikel()
    {
        return $this->belongsTo('App\KategoriArtikel','kategori_artikel_id');
    }

    public function User()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
