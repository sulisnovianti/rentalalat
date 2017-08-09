<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anggota;
use App\peminjam;
use App\Barang;

class Anggota extends Model
{
    //
      protected $table = 'anggotas';
    protected $fillable = ['nama','jk','status'];
    protected $visible = ['nama','jk','status'];
public $timestamps = true;

public function peminjam(){
	return $this->belongsTo('App\peminjam', 'peminjam_id');
}

}