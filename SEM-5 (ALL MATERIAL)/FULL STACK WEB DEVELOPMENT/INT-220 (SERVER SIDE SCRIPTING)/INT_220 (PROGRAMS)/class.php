<?php
// Defining a class
class Car {
    // Properties
    public $make;
    public $model;
    public $year;

    // Constructor method
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Method to get car details
    public function getCarDetails()
 {
    
        return "Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year;
    }
}

// Creating an object of the Car class
$car1 = new Car("Toyota", "Corolla", 2022);

// Accessing methods and properties

echo $car1->getCarDetails();
?>
