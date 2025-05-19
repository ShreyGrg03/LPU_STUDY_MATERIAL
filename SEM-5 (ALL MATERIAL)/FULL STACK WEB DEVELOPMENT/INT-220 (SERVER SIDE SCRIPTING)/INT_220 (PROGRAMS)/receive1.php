<?php
$filename = $_FILES['myfile']['name'];  // Original file name
$tmp_name = $_FILES['myfile']['tmp_name'];  // Temporary file name

// Define the destination path where you want to save the uploaded file
$destination = "uploads/" . $filename;

// Use move_uploaded_file to move the file from temporary to the destination
if (move_uploaded_file($tmp_name, $destination)) {
    echo "File uploaded successfully!";
} else {
    echo "File upload failed!";
}
?>
