<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Barang;
use App\peminjam;
use App\Anggota;
class Barang extends Model
{
    //

    protected $table = 'barangs';
    protected $fillable = ['nama_barang','jenis_barang','stok','jumlah'];
    protected $visible = ['nama_barang','jenis_barang','stok','jumlah'];
public $timestamps = true;

public function peminjam(){
	return $this->hasMany('App\peminjam', 'barang_id');
}
}
