<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Melky;

class MelkyController extends Controller
{
    public function awal()
    {
    	return "Hello dari MelkyController";
    }
    public function tambah()
    {
        return $this->simpan();
    }
    public function simpan()
    {
        $Melky = new Melky();
        $Melky->username = "jon doe";
        $Melky->password = "doe jon";
        $Melky->save();
        return "data dengan username {$Melky->username} telah disimpan";
    }
    
}
