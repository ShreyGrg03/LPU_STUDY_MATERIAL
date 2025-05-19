<form method="POST">  
Enter name <input type="text" name="name">  
Enter basic bay <input type="text" name="basic">  
Enter DA <input type="text" name="da">  
<input type="submit">
</form>  
<?php
class Person {
  // Properties
  public $name;
  public $basic;
  public $da;
  public $sal;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_basic($basic) {
    $this->basic = $basic;
  }
  function get_basic() {
    return $this->basic;
  }
  function set_da($da) {
    $this->da = $da;
  }
  function get_da() {
    return $this->da;
  }
  function calc_sal()
  {
    return $this->basic + $this->da;
  }
}
if($_POST)
{
$emp = new Person();
$emp->set_name($_POST['name']);
$emp->set_basic($_POST['basic']);
$emp->set_da($_POST['da']);
echo "Name: " . $emp->get_name();
echo "<br>";
echo "Salary: " .  $emp->calc_sal();
}
?>
