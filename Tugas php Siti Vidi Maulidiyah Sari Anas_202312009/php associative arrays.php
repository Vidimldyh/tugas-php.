<!DOCTYPE html>
<html>
<body>
<pre>

<?php
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;
var_dump($car);
?>

</pre>
</body>
</html>
