<?php
// Get the file details
$filename = $_FILES['myfile']['name'];
$tmp_name = $_FILES['myfile']['tmp_name'];

// Define the destination path
$destination = "uploads/" . basename($filename);

// Move the uploaded file to the destination
if (move_uploaded_file($tmp_name, $destination)) {
    echo "File uploaded successfully!";
} else {
    echo "File upload failed!";
}
?>