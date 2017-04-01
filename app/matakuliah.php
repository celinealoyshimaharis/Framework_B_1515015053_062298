<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table='matakuliah';
	protected $fillable = ['title','keterangan'];

	public function dosen_matakuliah(){
		return $this->hasMany(dosen_matakuliah::class);
		//Relasi hasMany menunjukkan adnaya relasi one to many 
    	//dimana nilai dalam tabel matakuliah diambil untuk direlasikan dengan tabel dosen_matakuliah yaitu id_matakuliah
	}
}
