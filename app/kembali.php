<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kembali extends Model
{
    //
     protected $table = 'kembalis';
    protected $fillable = ['tgl-kembali','peminjam_id','telat','denda'];
    protected $visible = ['tgl-kembali','peminjam_id','telat','denda'];
    public $timestamps = true;

public function peminjam()
{
	return $this->hasMany('App\peminjam', 'peminjam_id');
}

}
