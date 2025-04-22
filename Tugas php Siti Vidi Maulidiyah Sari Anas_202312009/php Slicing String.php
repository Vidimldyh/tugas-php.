<!DOCTYPE html>
<html>
<body>

<?php
$x = "Hello World!";
echo substr($x, 6, 5);
$x = "Hello World!";
echo substr($x, 6);

$x = "Hello World!";
echo substr($x, -5, 3);
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?> 

</body>
</html>
