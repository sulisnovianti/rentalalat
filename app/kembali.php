<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\peminjam;
use App\kembali;

class kembali extends Model
{
    //
     protected $table = 'kembalis';
    protected $fillable = ['tgl_kembali','tgl_pinjam','telat','denda'];
    protected $visible = ['tgl_kembali','tgl_pinjam','telat','denda'];
    public $timestamps = true;

public function peminjam()
{
	return $this->belongsTo('App\peminjam', 'peminjam_id');
}
}
