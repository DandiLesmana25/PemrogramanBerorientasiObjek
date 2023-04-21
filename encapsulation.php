<?php


//error
// class Hewan {

//     private string $kaki;
// }

// $ular = new Hewan();
// $ular->$kaki = 'tidak punya kaki';
// print_r($ular->kaki);


//gak error
class Hewan {
    //property kaki
    private string $kaki;
    //setter
    public function setKaki($kaki){
    $this->kaki = $kaki;
    }
    //getter
    public function getKaki(){
    return $this->kaki;
    }
}

$ular = new Hewan();
$ular->setKaki('ular tidak punya kaki'); //mengisi property kaki ular
print_r($ular->getKaki());

// $ayam = new Hewan();
// $ayam->setKaki('ayam berkaki dua'); //mengisi property kaki ayam
// print_r($ayam->getKaki());

   

// kalo punya visibility private kita harus punya method setter dan getter




//algoritma searching

// atm amati tiru dan modifikasi
// pelajari kodingannya


//aplikasi
//laporan



// bang rey
//sistem pendukung keputusan pegawai terbaik pake saw












//fungsi algoritma nya




//pak adi yang di nilai relasi\
//apakah relasinya one to one 
//one to many