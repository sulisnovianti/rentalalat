<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
      protected $table = 'anggotas';
    protected $fillable = ['nama','jk','status'];
    protected $visible = ['nama','jk','status'];
public $timestamps = true;

public function anggota(){
	return $this->hasMany('App\Anggota', 'anggota_id');
}
