<?php
// Parent class
abstract class Bike {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro(); 
}

// Child classes
class TVS extends Bike {
  public function intro(){
    return "This is a $this->name!"; 
  }
}

class Hero extends Bike {
  public function intro(){
    return "This is a $this->name!"; 
  }
}

class Yamaha extends Bike {
  public function intro(){
    return "This is a $this->name!"; 
  }
}

// Create objects from the child classes
$TVS = new TVS("TVS");
echo $TVS->intro();
echo "<br>";

$Hero = new Hero("Hero");
echo $Hero->intro();
echo "<br>";

$Yamaha = new Yamaha("Yamaha");
echo $Yamaha->intro();
?>
