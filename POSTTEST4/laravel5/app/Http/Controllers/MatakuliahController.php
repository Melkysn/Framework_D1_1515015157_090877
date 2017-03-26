<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\matakuliah;

class MatakuliahController extends Controller
{
    //
    public function awal()
  {
    return view('Matakuliah,awal', ['data'=>Matakuliah::all()]);
  }
  public function tambah()
  {
    return view('Matakuliah,tambah');
  }   
  public function simpan(Requests $input)
  {
        $Matakuliah = new Matakuliah;
        $Matakuliah->title = $input->title;
        $Matakuliah->keterangan = $input->keterangan;
        $informasi = $Matakuliah->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('Matakuliah')->with(['informasi'=>$informasi]);
  }
  public function edit($id)
  {
    $Matakuliah = Matakuliah::find($id);
    return view('Matakuliah,edit')->with(array('Matakuliah'=>$Matakuliah));    
  }
  public function lihat($id)
  {
    $Matakuliah = Matakuliah::find($id);
    return view('Matakuliah,lihat')->with(array('Matakuliah'=>$Matakuliah));
  } 
  public function update($id,Request $input)
  {
        $Matakuliah = Matakuliah::find($id);
        $Matakuliah->title = $input->title;
        $Matakuliah->keterangan = $input->keterangan;
        $informasi = $Matakuliah->save() ? 'berhasil update data' : 'gagal update data';
        return redirect('Matakuliah')->with(['informasi'=>$informasi]);
  }
  public function hapus($id)
  {
        $Matakuliah = Matakuliah::find($id);
        $informasi = $Matakuliah->delete() ? 'berhasil hapus data' : 'gagal hapus data';
        return redirect('Matakuliah')->with(['informasi'=>$informasi]);
  }
}
