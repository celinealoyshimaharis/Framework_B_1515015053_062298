<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
     protected $table='dosen_matakuliah';
    protected $fillable =['dosen_id','matakuliah_id'];

    public function jadwal_matakuliah()
    {
    	return $this->hasMany(jadwal_matakuliah::class);
    ////Relasi hasMany menunjukkan adnaya relasi one to many 
        //dimana nilai dalam tabel dosen_matakuliah diambil untuk direlasikan dengan tabel jadwal_matakuliah yaitu id_dosen_matakuliah    }
    public function matakuliah()
    {
    	return $this->belongsTo(matakuliah::class);
        //Relasi BELONGS_TO menunjukkan relasi sebuah model yang memiliki satu nilai atau lebih terhadap sebuah model lain yang memiliki satu nilai
        //Relasi belongsTo disini menunjukkan bahwa satu nilai diambil dari kepunyaan tabel matakuliah yaitu id_matakuliah
    }
    public function dosen()
    {
    	return $this->belongsTo(dosen::class);
        //Relasi BELONGS_TO menunjukkan relasi sebuah model yang memiliki satu nilai atau lebih terhadap sebuah model lain yang memiliki satu nilai
        //Relasi belongsTo disini menunjukkan bahwa satu nilai diambil dari kepunyaan tabel dosen yaitu id_dosen
    }
}

