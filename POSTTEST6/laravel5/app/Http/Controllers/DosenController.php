<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\dosen;
use App\pengguna;
class DosenController extends Controller
{
    //
   protected $informasi = 'gagal melakukan aksi';
    public function awal()
  {
  	$semuadosen = dosen::all();
    return view('dosen.awal', compact('semuadosen'));
  }
  public function tambah()
  {
    return view('dosen.tambah');
  }   
  public function simpan(Request $input)
  {
        $pengguna = new pengguna($input->only('username','password'));
        if($pengguna->save()){
        $dosen = new dosen();
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        if($pengguna->dosen()->save($dosen)) $this->informasi = 'berhasil siman data';
        }
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
  }
  public function edit($id)
  {
    $dosen = dosen::find($id);
    return view('dosen.edit')->with(array('dosen'=>$dosen));    
  }
  public function lihat($id)
  {
    $dosen = dosen::find($id);
    return view('dosen.lihat')->with(array('dosen'=>$dosen));
  } 
  public function update($id,Request $input)
  {
        $dosen = dosen::find($id);
        $dosen->nama = $input->nama;
        $dosen->nim = $input->nim;
        $dosen->alamat = $input->alamat;
        $dosen->save();
        if(!is_null($input->username)){
        	$pengguna->fill($input->only('username'));
        	if(!empty($input->password)){
        		$pengguna->password = $input->password;
        	}
        	if($pengguna->save()){
        		$this->infromasi = 'berhasil simpan data';
        	}
        	else{
        		$this->informasi = 'gagal simpan data';
        	}
        }
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
  }
  public function hapus($id)
  {
        $dosen = dosen::find($id);
        if($dosen->pengguna()->delete()){
        	$this->informasi = 'berhasil hapus data';
        }
  }
  return redirect('dosen')->with(['informasi'=>$this->informasi]);
}
