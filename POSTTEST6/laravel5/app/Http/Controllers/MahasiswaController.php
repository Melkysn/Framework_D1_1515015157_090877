<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mahasiswa;
use App\pengguna;

class MahasiswaController extends Controller
{
    //
    protected $informasi = 'gagal melakukan aksi';
    public function awal()
  {
  	$semuaMahasiswa = Mahasiswa::all();
    return view('mahasiswa.awal', compact('semuaMahasiswa'));
  }
  public function tambah()
  {
    return view('mahasiswa.tambah');
  }   
  public function simpan(Request $input)
  {
        $pengguna = new pengguna($input->only('username','password'));
        if($pengguna->save()){
        $mahasiswa = new mahasiswa();
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        if($pengguna->mahasiswa()->save($mahasiswa)) $this->informasi = 'berhasil simpan data';
        }
        return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
  }
  public function edit($id)
  {
    $mahasiswa = mahasiswa::find($id);
    return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));    
  }
  public function lihat($id)
  {
    $mahasiswa = mahasiswa::find($id);
    return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
  } 
  public function update($id,Request $input)
  {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nama = $input->nama;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat = $input->alamat;
        $mahasiswa->save();
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
        return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
  }
  public function hapus($id)
  {
        $mahasiswa = mahasiswa::find($id);
        if($mahasiswa->pengguna()->delete()){
        	$this->informasi = 'berhasil hapus data';
        }
  }
  return redirect('mahasiswa')->with(['informasi'=>$this->informasi]);
}
