<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Name: <input type="text" name="name">
Age: <input type="text" name="age">
E-mail: <input type="text" name="email">
<input type="submit" name="submit" value="Submit"> 
</form>

<?php
$filters = array (
  "name" => FILTER_SANITIZE_STRING,
  "age"   => array ( "filter"=>FILTER_VALIDATE_INT,"options"=>array("min_range"=>1,"max_range"=>120)),
  "email" => FILTER_VALIDATE_EMAIL
  );
print_r(filter_input_array(INPUT_POST, $filters));
?>