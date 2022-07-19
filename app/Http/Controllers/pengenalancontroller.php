<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengenalancontroller extends Controller
{
    public function pengenalan()
{
    $nama = "Surya Wiryadinata";
    $umur = "17";
    $alamat = "Jln bkr";
    $sekolah = "Smk Assalaam Bandung";
    return view('pages1.pengenalan', compact ('nama','umur','alamat','sekolah'));
}

public function intro($nama,$alamat,$umur){
    return view('pages1.intro' , compact('nama','alamat','umur'));
}


// looping dari conditional ke view
public function siswa (){
    $a = [
        array('id' => 1,'nama' => "Surya",'umur' => 17,'kelas' => "XII RPL 3", 'mapel' => ['B.indonesia' , 'B.inggris']),
        array('id' => 2,'nama' => "Rohesa",'umur' => 17,'kelas' => "XII RPL 3" , 'mapel' => ['MTK','IPA']),
        array('id' => 3,'nama' => "Wildan",'umur' => 17,'kelas' => "XII RPL 3" , 'mapel' => ['SIMDIG' , 'B.SUNDA']),
        array('id' => 4,'nama' => "Virgi",'umur' => 18,'kelas' => "XII RPL 3" , 'mapel' => ['FISIKA' , 'KWU']),
        array('id' => 5,'nama' => "Rizal",'umur' => 18,'kelas' => "XII RPL 3" , 'mapel' => ['PAI' , 'AL-QURAN'])
        
    ];
    return view('pages1.siswa' , ['siswa' => $a]);
    
}
}


