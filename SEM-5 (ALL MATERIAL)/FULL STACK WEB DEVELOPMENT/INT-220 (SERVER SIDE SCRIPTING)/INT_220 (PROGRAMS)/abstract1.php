<?php
   abstract class base {
      abstract function printdata();
      public function getdata() {
         echo "Hello";
      }
   }
   class child extends base{
      public function printdata(){
         echo "Good night";
      }
   }
   $obj = new child();
   $obj->getdata();
   echo "<br>";
   $obj->printdata();
?>

<?php
   // abstract class base {
   //    abstract function printdata();
   //    public function getdata($a) {
   //       echo $a;
   //    }
   // }
   // class child extends base{
   //    public function printdata(){
   //       echo "Good night";
   //    }
   // }
   // $obj = new child();
   // $obj->getdata(2);
   // echo "<br>";
   // $obj->printdata();
?>