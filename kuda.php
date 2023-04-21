<?php
require_once('./interface.php');
//gunakan keyword implements untuk menggunakan interface di suatu class
class Kuda implements Hewan {
    public function bergerak(){
        return 'kuda bisa bergerak';
        }
        public function makan(){
        return 'kuda memakan rerumputan';
        }
}


$object = new Kuda();
echo $object->bergerak();
echo "<br/>";
echo $object->makan();
echo "<br/>";
