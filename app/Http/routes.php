<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


// Route::get('/login','SesiController@form');
// Route::post('/login','SesiController@validasi');
// Route::get('/logout','SesiController@logout');
// Route::get('/','SesiCOntroller@index');


Route::get('/my','SesiController@tes');

Route::get('mahasiswa_pengguna','mahasiswacontroller@mahasiswa');


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function () {
    return 'Hello-World';
});



Route::get('berita/{berita?}',function ($berita="Laravel 5") 
{
	return "berita $berita belum di baca";
});


Route::get('/',function () 
{
	return \App\dosen_matakuliah::whereHas('dosen', function($query)
	{
		$query->where('nama','like','%a%');
		})->with ('dosen')->groupBy('dosen_id')->get();
});


Route::get('/', function()
{
	return \App\dosen_matakuliah::whereHas('dosen',function($query)
	{
		$query->where('nama','like','%a%');
	})
	->WhereHas('matakuliah', function ($query)
	{
		$query->where('title','like','%a%');
	})
	->with('dosen','matakuliah')
	->groupBy('dosen_id')
	->get();
	
});

// Route::get('/{id}', function ($id)
// {
// 	return \App\dosen_matakuliah::whereHas('matakuliah', function ($q) 
// 	{
// 		$q->where('keterangan','=', $id);
// 	})->with('matakuliah')->get();
// });

use Illuminate\Http\Request;
Route::get('/', function()
{
	echo Form::open(['url'=>'/']).
		 Form::label('nama').
		 Form::text('nama',null).
		 Form::submit('kirim').
		 Form::close();
});
Route::post('/', function (Request $request)
 {
	echo "Hasil dari Form input tadi adalah nama :   ".$request->nama;
});


// Route::get('/', function (Illuminate\Http\Request $request)
// {
// 	echo "ini adalah request dari method get ".$request->nama;
// });

// Route::get('ujiHas','RelationshipRebornController@ujiHas');

// Route::get('ujiDoesntHave','RelationshipRebornController@ujiDoesntHave');

// Route::get('ujiMK','RelationshipRebornController@ujiMK');




// Route::get('pengguna','PenggunaController@awal');
// Route::get('pengguna/tambah','PenggunaController@tambah');
// Route::get('pengguna/{pengguna}','PenggunaController@lihat');
// Route::post('pengguna/simpan','PenggunaController@simpan');
// Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
// Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
// Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');


// Route::get('mahasiswa','mahasiswacontroller@awal');
// Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');
// Route::get('mahasiswa/hapus','Mahasiswacontroller@hapus');
// Route::get('mahasiswa/{mahasiswa}','mahasiswacontroller@lihat');
// Route::post('mahasiswa/simpan','mahasiswacontroller@simpan');
// Route::get('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@edit');
// Route::post('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@update');
// Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswacontroller@hapus');


// Route::get('dosen','dosencontroller@awal');
// Route::get('dosen/tambah','dosencontroller@tambah');
// Route::get('dosen/hapus','dosencontroller@hapus');
// Route::get('dosen/{dosen}','dosencontroller@lihat');
// Route::post('dosen/simpan','dosencontroller@simpan');
// Route::get('dosen/edit/{dosen}','dosencontroller@edit');
// Route::post('dosen/edit/{dosen}','dosencontroller@update');
// Route::get('dosen/hapus/{dosen}','dosencontroller@hapus');


// Route::get('ruangan','ruangancontroller@awal');
// Route::get('ruangan/tambah','ruangancontroller@tambah');
// Route::post('ruangan/simpan','RuanganController@simpan');
// Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
// Route::post('ruangan/edit/{ruangan}','RuanganController@update');
// Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

// Route::get('matakuliah','matakuliahcontroller@awal');
// Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
// Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
// Route::post('matakuliah/simpan','MatakuliahController@simpan');
// Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
// Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
// Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

// Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
// Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
// Route::get('dosen_matakuliah/hapus','dosen_matakuliahcontroller@hapus');
// Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahcontroller@lihat');
// Route::post('dosen_matakuliah/simpan','dosen_matakuliahcontroller@simpan');
// Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@edit');
// Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_Matakuliahcontroller@update');
// Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahcontroller@hapus');

// Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
// Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
// Route::get('jadwal_matakuliah/hapus','jadwal_matakuliahcontroller@hapus');
// Route::get('jadwal_matakuliah/{jadwal_matakuliah}','jadwal_matakuliahcontroller@lihat');
// Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahcontroller@simpan');
// Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@edit');
// Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@update');
// Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahcontroller@hapus');



Route::get('/login','SesiController@form');
Route::post('/login','SesiController@validasi');
Route::get('/logout','SesiController@logout');
Route::get('/','SesiCOntroller@index');
Route::group(['middleware'=>'AutentifikasiUser'], function()
{
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');


Route::get('mahasiswa','mahasiswacontroller@awal');
Route::get('mahasiswa/tambah','mahasiswacontroller@tambah');
Route::get('mahasiswa/hapus','Mahasiswacontroller@hapus');
Route::get('mahasiswa/{mahasiswa}','mahasiswacontroller@lihat');
Route::post('mahasiswa/simpan','mahasiswacontroller@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswacontroller@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswacontroller@hapus');


Route::get('dosen','dosencontroller@awal');
Route::get('dosen/tambah','dosencontroller@tambah');
Route::get('dosen/hapus','dosencontroller@hapus');
Route::get('dosen/{dosen}','dosencontroller@lihat');
Route::post('dosen/simpan','dosencontroller@simpan');
Route::get('dosen/edit/{dosen}','dosencontroller@edit');
Route::post('dosen/edit/{dosen}','dosencontroller@update');
Route::get('dosen/hapus/{dosen}','dosencontroller@hapus');


Route::get('ruangan','ruangancontroller@awal');
Route::get('ruangan/tambah','ruangancontroller@tambah');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

Route::get('matakuliah','matakuliahcontroller@awal');
Route::get('matakuliah/tambah','matakuliahcontroller@tambah');
Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('dosen_matakuliah','dosen_matakuliahcontroller@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahcontroller@tambah');
Route::get('dosen_matakuliah/hapus','dosen_matakuliahcontroller@hapus');
Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahcontroller@lihat');
Route::post('dosen_matakuliah/simpan','dosen_matakuliahcontroller@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahcontroller@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_Matakuliahcontroller@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahcontroller@hapus');

Route::get('jadwal_matakuliah','jadwal_matakuliahcontroller@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahcontroller@tambah');
Route::get('jadwal_matakuliah/hapus','jadwal_matakuliahcontroller@hapus');
Route::get('jadwal_matakuliah/{jadwal_matakuliah}','jadwal_matakuliahcontroller@lihat');
Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahcontroller@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahcontroller@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahcontroller@hapus');

	});
