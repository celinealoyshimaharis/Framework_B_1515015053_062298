<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table ='ruangan';
  	protected $fillable = ['title'];

	public function jadwal_matakuliah(){
		return $this->hasMany(jadwal_matakuliah::class);
		//Relasi hasMany menunjukkan adnaya relasi one to many 
        //dimana nilai dalam tabel ruangan diambil untuk direlasikan dengan tabel jadwal_matakuliah yaitu id_ruangan
	}
}
