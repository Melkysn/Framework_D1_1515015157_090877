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
/*Route::get('berita/{berita?}', function ($berita = "Laravel 5")
{
	return "berita $berita belum dibaca";
}); */



/*Route::get('hello-world', function() {
	return ' hello world';
}); */

/*Route::get('pengguna/{pengguna}', function($pengguna)
{
	return "Hallow world dari pengguna $pengguna";
}); */


Route::get('pengguna/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get('matakuliah/{matakuliah}','matakuliahController@lihat');
Route::post('matakuliah/{simpan}','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahController@hapus');

Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

/*Route::get('Melky/tambah','MelkyController@tambah');
Route::get('Melky/tambah','MelkyController@tambah');*/

/*Route::get('/', function () {
    return view('welcome');
});*/
