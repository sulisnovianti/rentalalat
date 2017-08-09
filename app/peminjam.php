<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;
use App\peminjam;
use App\Anggota;

class peminjam extends Model
{
    //
     protected $table = 'peminjams';
    protected $fillable = ['tgl-pinjam','jumlah-hari','barang_id','anggota_id'];
    protected $visible = ['tgl-pinjam','jumlah-hari','barang_id','anggota_id'];
    public $timestamps = true;

public function barang()
{
	return $this->hasMany('App\Barang', 'barang_id');
}


public function anggota()
{
	return $this->hasMany('App\Anggota', 'anggota_id');
}
}

