 <?php
/* di  dalam php, kita bisa membuat constructur,
constructur adalah function yang akan dipanggil saat pertama kali object dibuat.
-mirip seperti di function kita bisa memberi parameter pada constructur
-nama constructur di php haruslah __construct */


class Hewan {
    function __destruct(){
        echo "ini destruct";
    }
    function showMessage(){
        echo "Hello". "<br>";
    }
    function __construct($nama= "asep", $makanan){
        echo "nama kucing saya". $nama. "kucing saya makan".$makanan . "<br>";
    }
}

$kucing = new Hewan('udin', 'royal canin');
$kucing->showMessage();