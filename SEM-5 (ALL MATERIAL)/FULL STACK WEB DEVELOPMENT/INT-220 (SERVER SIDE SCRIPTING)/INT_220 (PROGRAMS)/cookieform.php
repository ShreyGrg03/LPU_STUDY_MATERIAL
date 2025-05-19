<form action="" method="POST">
<input type="text" name="user">
<input type="submit" name ="set" value="set">
<input type="submit" name ="del" value="del">

</form>

<?php

if(isset($_POST['set']))
{

$cookie1 = $_POST['user'];
setcookie($cookie1, $cookie1, time() + 3600);

?>

<?php
if(isset($_COOKIE[$cookie1])) 
{
     echo "Cookie '" . $cookie1 . "' has been set<br>";
     echo "Value is: " . $_COOKIE[$cookie1];
} 
else 
{
     echo "Cookie '" . $cookie1 . "' is not set";
}
}
?>


<?php

if(isset($_POST['del']))
{

     $cookie1 = $_POST['user'];
     setcookie($cookie1, "", time() - 3600);
     echo $_COOKIE[$cookie1]. " has been deleted";
}

?>