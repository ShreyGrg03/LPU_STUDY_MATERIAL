<?php
class Vehicle {
  // Properties
  public $type;

  // Methods
  function set_type($type) {
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }
}

$car = new Vehicle();
$bike = new Vehicle();
$car->set_type('car');
$bike->set_type('bike');

echo $car->get_type();
echo "<br>";
echo $bike->get_type();
?>