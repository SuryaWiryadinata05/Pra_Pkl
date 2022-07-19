<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function soal1(){

        $a = [
            'judul' => ['Beranda','Berita','Tentang'],
            'data' => ['Olahraga','politik','Manca negara'],
            'isi' => ['Sepakbola','Bulutangkis']
        ];
        // dd($a);
        return view('pages1.soal1' , ['soal1' => $a]);
    }


    public function soal2(){


        $b = [
        ['id'=> 1, 'nama' => 'Muhamad soleh' , 'nilai' => 78],
        ['id'=> 1, 'nama' => 'Jujun Junaedi' , 'nilai' => 85],
        ['id'=> 1, 'nama' => 'Mamat Alkatiri' , 'nilai' => 90],
        ['id'=> 1, 'nama' => 'Ubay holin' , 'nilai' => 87],
        ['id'=> 1, 'nama' => 'Fadilah' , 'nilai' => 95],

        ['id'=> 2, 'nama' => 'Alfred Mctomminay' , 'nilai' => 67],
        ['id'=> 2, 'nama' => 'Bruno Kasmir' , 'nilai' => 90],
        ['id'=> 2, 'nama' => 'Akid Hendra' , 'nilai' => 50],
        ['id'=> 2, 'nama' => 'Dany Irawan' , 'nilai' => 70],
        ['id'=> 2, 'nama' => 'Chandra Mega Putra' , 'nilai' => 60],
        ]; 
        // dd($b);
        return view('pages1.soal2' , ['soal2' => $b]);
}

        public function televisi(){
            $b = [
                ['tv' => 'NET TV',
                'acara' => ['Pororo'],
                'jt' => ['08.00 - 09.00'],
                'jtt' => ['Senin - Minggu'],],

                ['tv' => 'O Channel',
                'acara' => ['Lawak Bersama'],
                'jt' => ['10.00 - 11.00'],
                'jtt' => ['Senin - Rabu'],],
            ];

            return view('pages1.televisi' , ['televisi' => $b]);
        }

        public function pakaian(){

            $aa = 
            [
            [
                'nama' => ['alfian'],
                'barang' => ['sepatu','baju','celana','kupluk'],
                'harga' => [250000,100000,150000,100000]
            ],
            [
                'nama' => ['dida'],
                'barang' => ['topi','celana','baju'],
                'harga' => [100000,125000,75000]
            ]
            ];
            
            // dd($aa);
            return view('pages1.latihan' , ['latihann' => $aa]);

            foreach($aa as $alfi){
               $hasil = array_sum($alfi['harga']);
               if($hasil >= 500000){
                $cb = 0.10;
               }
               else if($hasil >= 250000){
                $cb = 0.05;
               }
               else {
                $cb = "gak Ada diskon";
               }
            }
            
        }
        
}


