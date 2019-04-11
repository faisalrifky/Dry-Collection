<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable = ['nama_kategori','deskripsi'];
    public $timestamps = true;

    public function Barang(){
        return $this->HasMany('App\Barang','barang_id');
}
}
