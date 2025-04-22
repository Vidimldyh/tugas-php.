<!DOCTYPE html>
<html>
<body>

<pre>
<?php
// Contoh variabel dengan berbagai tipe data
$a = 5;       // Integer (bilangan bulat)
$b = 5.34;    // Float (bilangan desimal)
$c = "halo";  // String (teks)
$d = true;    // Boolean (nilai benar/salah)
$e = NULL;    // NULL (tidak ada nilai)

// Mengubah semua variabel menjadi tipe data string (teks)
$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

// Untuk memeriksa tipe dan isi variabel, gunakan fungsi var_dump()
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>Catatan: Saat tipe Boolean diubah menjadi string, nilainya menjadi "1".  
Sedangkan jika NULL diubah menjadi string, hasilnya menjadi string kosong "".</p>

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?> 
</pre>

<p>Note that when casting a string that starts with a number, the (int) function uses that number. If it does not start with a number, the (int) function convert strings into the number 0.</p>

class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");

$myCar = (array) $myCar;
var_dump($myCar);?> 
</pre>

<p>Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values.</p>

$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.</p>

<p>NULL values converts to an empty object.</p>
</body>
</html> 
