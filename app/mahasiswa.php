<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    //
    protected $table='mahasiswa';
    protected $fillable =['nama','nim','alamat','pengguna_id'];

    public function Pengguna()
    {
    	return $this->belongsTo(Pengguna::class);
    }

    public function jadwal_matakuliah(){
		return $this->hasMany(jadwal_matakuliah::class);
	}

	public function getUsernameAttribute(){
		return $this->pengguna->username;
	}
}
