<table border=2>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>

<?php
echo(filter_id("validate_email"));
?>

<?php
//print_r(filter_list());
foreach(filter_list() as $id=>$filter)
{
    echo filter_id($filter) ."-->". $filter . "<br>";
}
?>
