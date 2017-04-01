<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah';
    protected $fillable= ['mahasiswa_id','ruangan_id', 'dosen_matakuliah_id'];

    public function mahasiswa()
    {
    	return $this->belongsTo(mahasiswa::class);
        //Relasi BELONGS_TO menunjukkan relasi sebuah model yang memiliki satu nilai atau lebih terhadap sebuah model lain yang memiliki satu nilai
        //Relasi belongsTo disini menunjukkan bahwa satu nilai diambil dari kepunyaan tabel mahasiswa yaitu id_mahasiswa
    }
    public function ruangan()
    {
    	return $this->belongsTo(ruangan::class);
        //Relasi BELONGS_TO menunjukkan relasi sebuah model yang memiliki satu nilai atau lebih terhadap sebuah model lain yang memiliki satu nilai
        //Relasi belongsTo disini menunjukkan bahwa satu nilai diambil dari kepunyaan tabel ruangan yaitu id_ruangan
    }
    public function dosen_matakuliah()
    {
    	return $this->belongsTo(dosen_matakuliah::class);
        //Relasi BELONGS_TO menunjukkan relasi sebuah model yang memiliki satu nilai atau lebih terhadap sebuah model lain yang memiliki satu nilai
        //Relasi belongsTo disini menunjukkan bahwa satu nilai diambil dari kepunyaan tabel dosen_matakuliah yaitu id_dosen_matakuliah
            }
    
}
