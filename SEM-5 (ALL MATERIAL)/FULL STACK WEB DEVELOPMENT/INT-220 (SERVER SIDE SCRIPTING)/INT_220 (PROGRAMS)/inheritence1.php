<?php
class Vehicle {
  public $type;
  public $brand;
  public function __construct($type, $brand) {
    $this->type = $type;
    $this->brand = $brand;
  }
  protected function intro() {
    echo "The type is $this->type and the brand is $this->brand.";
  }
}

// Car is inherited from Vehicle
class Car extends Vehicle {
  public function message() 
  {
    echo "Am I a vehicle or a car? ";
  }
}
$car = new Car("car", "suzuki");
$car->message();
$car->intro();// will give error as the intro() is protected
?>