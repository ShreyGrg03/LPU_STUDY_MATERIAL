<?php
// Abstract class
abstract class Animal {
    // Abstract method (does not have a body)
    abstract protected function makeSound();

    // Regular method
    public function sleep() {
        echo "Zzz...";
    }
}

// Class extending the abstract class
class Dog extends Animal {
    // Implementing the abstract method
    public function makeSound() {
        echo "Woof! Woof!";
    }
}

class Cat extends Animal {
    // Implementing the abstract method
    public function makeSound() {
        echo "Meow!";
    }
}

// Create objects of the child classes
$dog = new Dog();
$cat = new Cat();

// Call the methods
$dog->makeSound(); // Outputs: Woof! Woof!
$dog->sleep();     // Outputs: Zzz...

$cat->makeSound(); // Outputs: Meow!
$cat->sleep();     // Outputs: Zzz...
?>
