<?php
$cookie_name = "user";
$cookie_value = "nav kaur";
setcookie($cookie_name, $cookie_value, time() + 5); // 86400 = 1 day

if(isset($_COOKIE[$cookie_name])) 
{
     echo "Cookie '" . $cookie_name . "' has been set<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
} 
else 
{
     echo "Cookie '" . $cookie_name . "' is not set";
}
?>