<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //

    protected $table = 'barangs';
    protected $fillable = ['nama_barang','jenis_barang','stok','jumlah'];
    protected $visible = ['nama_barang','jenis_barang','stok','jumlah'];
public $timestamps = true;

public function barang(){
	return $this->belongsTo('App\Barang', 'barang_id');
}
}
