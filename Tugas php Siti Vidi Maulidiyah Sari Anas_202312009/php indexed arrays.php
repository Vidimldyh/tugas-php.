<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$cars = array("Volvo", "BMW", "Toyota"); 
var_dump($cars);
$cars = array("Volvo", "BMW", "Toyota"); 
$cars[1] = "Ford";
var_dump($cars);
$cars = array("Volvo", "BMW", "Toyota"); 

foreach ($cars as $x) {
  echo "$x <br>";
?>

</pre>
</body>
</html>
