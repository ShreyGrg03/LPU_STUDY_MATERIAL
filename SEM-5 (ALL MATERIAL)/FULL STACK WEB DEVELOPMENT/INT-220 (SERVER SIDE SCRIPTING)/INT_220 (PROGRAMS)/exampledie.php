<?php
// Check if the file exists
$file = 'example.txt';

if (!file_exists($file)) {
    die('File not found!');
}

// Continue execution if the file exists
echo 'File exists!';
?>
