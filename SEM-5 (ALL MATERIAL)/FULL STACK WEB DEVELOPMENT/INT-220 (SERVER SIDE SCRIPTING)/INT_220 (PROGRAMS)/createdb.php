<?php
// Create connection
$link = new mysqli("localhost", "root", "");
// Check connection
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
}

// Create database
$sql = "CREATE DATABASE demo3";
if ($link->query($sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $link->error;
}

$link->close();
?>