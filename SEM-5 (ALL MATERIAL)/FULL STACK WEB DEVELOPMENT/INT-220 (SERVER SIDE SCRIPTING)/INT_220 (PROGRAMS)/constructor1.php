<?php
class Vehicle {
  public $type;
  public $brand;

  function __construct($type, $brand) {
    $this->type = $type; 
    $this->brand = $brand; 
  }
  function get_type() {
    return $this->type;
  }
  function get_brand() {
    return $this->brand;
  }
}

$car = new Vehicle("car", "suzuki");
$bike = new Vehicle("bike", "TVS");
echo $car->get_type();
echo "<br>";
echo $car->get_brand();
echo "<br>";
echo $bike->get_type();
echo "<br>";
echo $bike->get_brand();
?>

