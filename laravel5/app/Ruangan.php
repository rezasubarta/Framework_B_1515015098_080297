<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruangan extends Model
{
    protected $table = 'ruangan'; // digunakan untuk mendeklarasikan tabel pengguna

    //protected $fillable = ['title'];

    //DISINI MODEL PENGGUNA BERELASI DENGAN MODEL JADWAL_MATAKULIAH

     public function jadwal_matakuliah(){ // UNTUK MENENTUKAN HUBUNGANNYA, DIBUAT FUNGSI JADWAL_MATAKULIAH PADA MODEL PENGGUNA
        
     return $this->hasMany(JadwaL_matakuliah::class); // memberikan nilai return dari fungsi hasMany dengan merelasikan ruangan dengan banyak jadwal_matakuliah dengan foreign key ruangan_id
    
    }
}
