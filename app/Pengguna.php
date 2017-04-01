<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{

protected $table ='pengguna'; 
protected $fillable = ['username','password'];

    
public function mahasiswa()
{
	return $this->hasOne(mahasiswa::class);
    //Relasi HAS_ONE adalah relasi sebuah record yang hanya berrelasi dengan sebuah record dari model yang lainyaitu id_pengguna yang ada dalam tabel mahasiswa

}
    
    public function dosen()
    {
    	return $this->hasOne(dosen::class);
        //Relasi HAS_ONE adalah relasi sebuah record yang hanya berrelasi dengan sebuah record dari model yang lain yaitu id_pengguna yang ada dalam tabel dosen
            }  

 
  

    	
    // public function peran()
    // {
    // 	return $this->belpongsToMany(peran::class);
    //relasi belongsToMany disini untuk menunjukan adanya relasi many to many
    //dimana peran juga dimiliki oleh pengguna lain, dan banyak pengguna dapat memiliki banyak peran
            //}  

}




