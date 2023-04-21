<?php

//abstract class selalu diawali dengan keyword abstract
abstract class Hewan {
    public $nama;
    public function __construct($nama){
    $this->nama = $nama;
    }
    public function bergerak() {
    return 'namaku '.$this->nama. ' saya bisa bergerak bebas';
    }
   }
   $hewan = new Hewan('Si Oren');
   echo $hewan->bergerak();