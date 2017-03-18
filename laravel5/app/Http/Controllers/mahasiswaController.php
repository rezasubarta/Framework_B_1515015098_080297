<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\mahasiswa;

class MahasiswaController extends Controller
{
    public function awal()
   {
   	return "Hello dari MahasiswaController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$mahasiswa = new Mahasiswa();
   	$mahasiswa->nama = 'Reza Akbar Subarta';
   	$mahasiswa->nim = '1515015098';
   	$mahasiswa->alamat = 'Jl. Perjuangan 9';
   	$mahasiswa->pengguna_id = '3';	
   	$mahasiswa->save();   
   	return "Data Mahasiswa dengan nama {$mahasiswa->nama} telah disimpan";
   }
}
