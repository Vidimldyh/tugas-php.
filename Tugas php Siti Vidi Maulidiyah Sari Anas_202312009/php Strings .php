<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello";
print "Hello";

$x = "John";
echo 'Hello $x';

$x = "Hello World!";
echo strtoupper($x);

$x = "Hello World!";
echo strtolower($x);

$x = "Hello World!";
echo strrev($x);

$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
?>

</body>
</html>
