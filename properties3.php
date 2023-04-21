<?php

/*-fields/properties/atribute adalah data yang bisa disisipkan di dalam object
-Namun sebelum kita memasukan data di fields, kita harus mendeklarasikan 
data apa saja yang dimiliki object tersebut di dalam deklarasi class nya
-membuat field sama seperti membuat variable, namun ditempatkan di block class,
namun di awali dengan kata kunci var 
 */ 
//syntak ada di class1.php

/* MANIPULASI FIELD/PROPERTIE 
-field yang ada di object, bisa kita manipulasi
-untuk memanipulasi data field sama seperti cara pada variable
-untuk mengakses field, kita butuh kata kunci -> setelah nama object
dan diikuti nama fields/properti nya 
*/ 


require_once "class1.php";
$orang = new Person();
$orang->name = "sadut";
$orang->age = 20;
$orang->addres = "karawang";

var_dump($orang);
echo "Nama : $orang->name" . PHP_EOL;


$orang2 = new Person();
$orang2->name = "dadang";
$orang2->age = 20;
var_dump($orang2);


/*PROPERTIES TYPE DECLARATION
-sama seperti di function, di properties pun kita bisa membuat type declaration
-ini membuat php otomatis mengecek type data sesuai dengan type declaration yang
telah ditentukan.
- jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis 
akan error.
-ingat, bahwa php memiliki fitur type jugling yang secara otomatis bisa mengkonversi
ke tipe data lain
-untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci
var di properties  
*/ 

// syntax di class1.php

/*DEFAULT PROPERTIES VALUE
-sama seperti variable, di propertie juga bisa langsung mengisi value nya
- ini mirip seperti default value, jadi jika tidak diubah di object, maka
peoperties akan memiliki value tersebut

*/
// syntax di class1.php

/* NULLABLE PROPERTIES
- saat kita menambahkan type declaration di properties atau di functiion argument,
maka secara otomatis kita tidak bisa mengirim data null kedalam properties atau
function
- di php 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null 
ke properties atau function argument.
-caranya sebelum type declaration nya kita bisa tambahkan tanda 
*/ 