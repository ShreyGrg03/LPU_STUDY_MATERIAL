<?php include 'connection.php';?>

<html> 
  <body>
<div>
    <form action="" method="POST">
      <label for="fname">First Name:</label>
      <input type="text" name="fname" placeholder="First Name" required><br><br>
      
      <label for="lname">Last Name:</label>
      <input type="text" name="lname" placeholder="Last Name" required><br><br>
      
      <label for="age">Age:</label>
      <input type="number" name="age" placeholder="Age" required><br><br>
      
      <input type="submit" name="save_btn" value="Save">
      <button> <a href="view.php">View</a></button>
    </form>
  </div>
  <?php
  
  if (isset($_POST['save_btn'])) 
  {
      
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $age = $_POST['age'];

      $query = "INSERT INTO student (fname, lname, age) VALUES ('$fname', '$lname', '$age')";
      $data=mysqli_query($con, $query);
      if($data)
        {
            echo "Entered data is save successfully";
        }
      else
        {
            echo "Again save data";
        }  
  }
  ?>
</body>
</html>
