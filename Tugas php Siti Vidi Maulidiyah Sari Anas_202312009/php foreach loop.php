<!DOCTYPE html>
<html>
<body>

<?php  
$colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
  class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  foreach ($myCar as $x => $y) {
    echo "$x: $y<br>";
  }
?>  

</body>
</html>
