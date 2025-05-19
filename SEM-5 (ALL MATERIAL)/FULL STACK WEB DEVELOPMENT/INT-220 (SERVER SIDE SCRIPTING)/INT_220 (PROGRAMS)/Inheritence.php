<?php
// Include class definition
require "ob.php";
 
// Define a new class based on an existing class
class Square extends Rectangle
{   
    // Method to test if the rectangle is also a square
    public function isSquare(){
        if($this->length == $this->width){
            return true; // Square
        } else{
            return false; // Not a square
        }
    }
}
 
// Create a new object from Square class
$obj = new Square;
 
// Set object properties values
$obj->length = 20;
$obj->width = 20;
 
// Call the object methods
if($obj->isSquare()){
    echo "The area of the square is ";
} else{
    echo "The area of the rectangle is ";
};
echo $obj->getArea();
?>
