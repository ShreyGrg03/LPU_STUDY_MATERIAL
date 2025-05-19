<?php
class Vehicle {
  // Properties
  public $type;
  public $brand;

  // Methods
  function set_type($type) {
    $this->type = $type;
  }
  function get_type() {
    return $this->type;
  }
  function set_brand($brand) {
    $this->brand = $brand;
  }
  function get_brand() {
    return $this->brand;
  }
}

$car = new Vehicle();
$car->set_type('car');
$car->set_brand('Suzuki');
echo "Type: " . $car->get_type();
echo "<br>";
echo "Brand: " .  $car->get_brand();
?>