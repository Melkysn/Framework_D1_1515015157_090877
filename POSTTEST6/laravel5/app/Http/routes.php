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

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/{pengguna}','PenggunaController@lihat');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');

Route::post('matakuliah/simpan','MatakuliahController@simpan');
Route::get('matakuliah/{matakuliah}','MatakuliahController@lihat');
Route::get('matakuliah/edit/{matakuliah}','MatakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','MatakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','MatakuliahController@hapus');

Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');

Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/{ruangan}','RuanganController@lihat');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');

Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');

Route::post('mahasiswa/simpan','MahasiswaController@simpan');
Route::get('mahasiswa/{mahasiswa}','MahasiswaController@lihat');
Route::get('mahasiswa/edit/{mahasiswa}','MahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','MahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','MahasiswaController@hapus');

Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');

Route::post('dosen/simpan','DosenController@simpan');
Route::get('dosen/{dosen}','DosenController@lihat');
Route::get('dosen/edit/{dosen}','DosenController@edit');
Route::post('dosen/edit/{dosen}','DosenController@update');
Route::get('dosen/hapus/{dosen}','DosenController@hapus');

/*Route::get('Melky/tambah','MelkyController@tambah');
Route::get('Melky/tambah','MelkyController@tambah');*/

/*Route::get('/', function () {
    return view('welcome');
}); */
