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
        //Relasi BELONGS_TO menunjukkan relasi sebuah model yang memiliki satu nilai atau lebih terhadap sebuah model lain yang memiliki satu nilai
        //Relasi belongsTo disini menunjukkan bahwa satu nilai diambil dari kepunyaan tabel pengguna yaitu id_pengguna
    }

    public function jadwal_matakuliah(){
		return $this->hasMany(jadwal_matakuliah::class);
        //Relasi hasMany menunjukkan adnaya relasi one to many 
        //dimana nilai dalam tabel mahasiswa diambil untuk direlasikan dengan tabel jadwal_matakuliah yaitu id_mahasiswa
	}

	public function getUsernameAttribute(){
		return $this->pengguna->username;
	}
}
