<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';

    protected $fillable = ['nama','nip','alamat','pengguna_id'];
    
    public function Pengguna(){
    	return $this->belongsTo(Pengguna::class);
    	//Relasi BELONGS_TO menunjukkan relasi sebuah model yang memiliki satu nilai atau lebih terhadap sebuah model lain yang memiliki satu nilai
    	//Relasi belongsTo disini menunjukkan bahwa satu nilai diambil dari kepunyaan tabel pengguna yaitu id_pengguna
    }

    public function dosen_matakuliah(){
    	return $this->hasMany(dosen_matakuliah::class);
    	//Relasi hasMany menunjukkan adnaya relasi one to many 
    	//dimana nilai dalam tabel dosen diambil untuk direlasikan dengan tabel dosen_matakuliah yaitu id_dosen
    }

    public function getUsernameAttribute(){
        return $this->pengguna->username;
    }
    public function listDosenDanNip(){
        $out = [];
        foreach ($this->all() as $dsn) {
            $out[$dsn->id] = "{$dsn->nama} ({$dsn->nip})";
        }
        return $out;
    }
}
