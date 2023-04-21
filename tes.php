<?php

/*
-buat satu class mahasiswa
-buat 4 private function (nama, kelas, prodi, angkatan)
-buat 1 function public
-panggil method
*/ 

class Mahasiswa {
   
    private function nama(){
        return "hello my name is dandi";
    }
    private function kelas(){
        return "kelas : IF21E";
    }
    private function prodi(){
        return"Prodi Teknik informatika";
    }
    private function angkatan(){
        return "Angkatan: 2021";
    }

    public function panggil(){
        echo $this->nama();
        echo $this->kelas();
        $this->prodi();
        $this->angkatan();
        
        

        
        // $hasil = $nilai1 + $nilai2;
        // return $hasil;
    }


    

}

$say = new Mahasiswa();



// class Salam extends Sapa{
//     public function show(){
//         echo $this-sayHello();
//     }


// }

// $say = new Sapa();
// $say->show();
