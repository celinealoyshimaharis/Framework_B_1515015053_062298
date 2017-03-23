<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class mahasiswacontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswacontroller";
    }
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$mahasiswa=new mahasiswa();
	$mahasiswa->nama='kelly emilia';
	$mahasiswa->nim='1515015555';
	$mahasiswa->alamat='jalan biawan 7';
	$mahasiswa->pengguna_id=1;
	$mahasiswa->save();
	return "data dengan nama {$mahasiswa->nama} telah disimpan";
}
}
