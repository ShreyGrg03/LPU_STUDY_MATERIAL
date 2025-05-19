<?php
class MyClass
{
    // Constructor
    public function __construct(){
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }
    
    // Destructor
    public function __destruct(){
        echo 'The class "' . __CLASS__ . '" was destroyed.<br>';
    }
}
 
// Create a new object
$obj = new MyClass;
 
// Output a message at the end of the file
echo "The end of the file is reached.";
?>