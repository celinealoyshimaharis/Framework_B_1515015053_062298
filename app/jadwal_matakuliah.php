<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable= ['mahasiswa_id','ruangan_id', 'dosen_matakuliah_id'];

    public function mahasiswa()
    {
    	return $this->belongsTo('App/mahasiswa');
    }
    public function ruangan()
    {
    	return $this->belongsTo('App/ruangan');
    }
    public function dosen_matakuliah()
    {
    	return $this->belongsTo('App/dosen_matakuliah');
    }
    
}
