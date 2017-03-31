<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen';
    
    pubic function Pengguna(){
    	return $this->belongsTo(Penguna::class);
    }

    public function dosen_matakuliah(){
    	return $this->hasMany(dosenmatakuliah::class);
    }

    protected $fillable = ['nama','nip','alamat','pengguna_id'];
}
