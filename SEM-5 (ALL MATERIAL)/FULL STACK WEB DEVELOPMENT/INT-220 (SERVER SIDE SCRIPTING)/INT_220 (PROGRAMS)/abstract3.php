//<!-- Abstract class cannot be directly instantiate. We can't create an object of the abstract class but we can create object for child classes-->
<?php
   abstract class base{
      abstract function calculate();
      public function msg() {
         echo "Calculation completed";
      }
   }
   $obj=new base();
   $obj->adddata();
?>