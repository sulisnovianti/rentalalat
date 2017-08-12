<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\peminjam;
use App\kembali;

class kembali extends Model
{
    //
     protected $table = 'kembalis';
    protected $fillable = ['tgl_kembali','peminjam_id','telat','denda'];
    protected $visible = ['tgl_kembali','peminjam_id','telat','denda'];
    public $timestamps = true;

public function peminjam()
{
	return $this->belongsTo('App\peminjam', 'peminjam_id');
}
}
