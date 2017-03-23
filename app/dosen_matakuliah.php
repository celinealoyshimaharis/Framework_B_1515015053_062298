<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
     protected $table='dosen_matakuliah';
    protected $fillable =['dosen_id','matakuliah_id'];

    public function jadwal_matakuliah()
    {
    	return $this->hasMany('App/jadwal_matakuliah');
    }
    public function matakuliah()
    {
    	return $this->belongsTo('App/matakuliah');
    }
    public function dosen()
    {
    	return $this->belongsTo('App/dosen');
    }
}

