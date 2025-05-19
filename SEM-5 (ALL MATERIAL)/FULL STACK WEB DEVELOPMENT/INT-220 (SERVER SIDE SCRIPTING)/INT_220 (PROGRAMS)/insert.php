<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo3");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "CREATE TABLE students(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL UNIQUE,
    city VARCHAR(30) NOT NULL,
    marks INT
)";
$sql="CREATE TABLE `lalit`.`lali` (`name` VARCHAR(10) NOT NULL , 
`id` INT(12) NOT NULL , `address` VARCHAR(20) NOT NULL ,
 `marks` INT(6) NOT NULL , PRIMARY KEY (`id`))";
$sql="INSERT INTO `lali` (`name`, `id`, `address`, `marks`) VALUES ('Abhishek', '27', 'GOMTI NAGAR', '85')";
$query=mysqli_query($conn,$sql);
if($query)
echo "data insert successfully";

if(mysqli_query($link, $sql)){
    echo "Table created successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>