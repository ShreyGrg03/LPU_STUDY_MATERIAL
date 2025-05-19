<?php
   // Abstract class definition
   abstract class Base {
      // Abstract method
      abstract function calculate();
      
      // Concrete method
      public function msg() {
         echo "Calculation completed";
      }
   }

   // Concrete class extending the abstract class
   class Derived extends Base {
      // Implementing the abstract method
      public function calculate() {
         echo "Performing calculation...";
      }
   }

   // Create an object of the derived class, not the abstract class
   $obj = new Derived();
   $obj->calculate(); // Outputs: Performing calculation...
   $obj->msg();       // Outputs: Calculation completed
?>