<?php

namespace App\Http\Controllers;

use App\dosen;
use App\matakuliah;

class RelationshipRebornController extends Controller{
	public function ujiHas()
	{
		$data = dosen::has('dosen_matakuliah')->get();
		dd($data);
		// return dosen::has('dosen_matakuliah')->get();
	}
	public function ujiDoesntHave()
	{

		$data = dosen::doesntHave('dosen_matakuliah')->get();
		dd($data);
		// return dosen::doesntHave('dosen_matakuliah')->get();
	}

	public function ujiMK()
{

		$data = matakuliah::doesntHave('dosen_matakuliah')->get();
		dd($data);
		 // return matakuliah::doesntHave('dosen_matakuliah')->get();
	}


}

