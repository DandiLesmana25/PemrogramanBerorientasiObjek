<?php
/*
*/ 

class Sapa {
   
    private function sayHello(){
        return "hello my name is sadut";
    }

    public function show(){
        echo $this->sayHello();
        

        
        // $hasil = $nilai1 + $nilai2;
        // return $hasil;
    }
    

}


class Salam extends Sapa{
    public function show(){
        // echo $this-sayHello();
    }


}

$say = new Sapa();
$say->show(1,2);
