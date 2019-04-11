<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = ['nama_barang','kode_barang','harga','gambar','keterangan','kategori_id'];
    public $timestamps = true;

    public function Kategori(){
        return $this->belongsTo('App\Kategori','kategori_id');
    }
}
