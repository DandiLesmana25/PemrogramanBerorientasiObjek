<?php
/* untuk membuat class, kita bisa menggunakan kata kunci class
penamaan class biasa menggunakan format CamelCase*/ 

class Person {
    //properties
    var  $name = "agus";   // agus = default value
    var $age;
    var string $addres; //string = PROPERTIES TYPE DECLARATION
    var ?string $hobi = null; //null  =  NULLABLE PROPERTIES(null harus ada tanda ?)


} 

$orang = new Person();
var_dump($orang);