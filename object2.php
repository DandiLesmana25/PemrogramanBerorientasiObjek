<?php
/* object adalah hasil instansiasi dari sebuah class
untuk membuat object kita bisa menggunakan kata kunci new, dan diikuti 
dengan nama Class dan kurung()
 */ 

 require_once "class1.php";
$orang = new Person();
$orang2 = new Person();
$orang3 = new Person();
var_dump($orang);
var_dump($orang2);