<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
    public function awal()
   {
   	return "Hello dari DosenController";
   }
   public function tambah()
   {
   	return $this->simpan();
   }
   public function simpan()
   {
   	$dosen = new Dosen();
   	$dosen->nama = 'rose';
   	$dosen->nip = '0802';
   	$dosen->alamat = 'jalan gelatik';
   	$dosen->pengguna_id = '3';	
   	$dosen->save();   
   	return "data dengan nama pak/bu {$dosen->nama} telah disimpan";
   }
}

