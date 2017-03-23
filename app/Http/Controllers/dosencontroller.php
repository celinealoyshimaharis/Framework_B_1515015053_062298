<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;

class dosencontroller extends Controller
{
    public function awal()
    {
    	return "Hello dari dosencontroller";
    }
     
public function tambah()
{
	return $this->simpan();
}
public function simpan()
{
	$dosen= new dosen();
	$dosen->nama='Egy Alatas';
	$dosen->nip='1412131516';
	$dosen->alamat='jalan gelatik 2';
	$dosen->pengguna_id=2;
	$dosen->save();
	return "data dengan nama {$dosen->nama} telah disimpan";
}
}
