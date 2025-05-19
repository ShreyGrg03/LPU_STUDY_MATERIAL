<?php

//sanitize string
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo "<br>";

//Validate integer
$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) 
{
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br>";


//Validate integer
$int = 0;
if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br>";


//Sanitize and Validate a URL
$url = "https://google.com";
$url = filter_var($url, FILTER_SANITIZE_URL);
if (!filter_var($url, FILTER_VALIDATE_URL) === false) 
{
  echo("$url is a valid URL");
} 
else 
{
  echo("$url is not a valid URL");
}
echo "<br>";


//Sanitize and Validate an Email Address
$email = "nav.1992@something.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) 
{
  echo("$email is a valid email address");
} 
else 
{
  echo("$email is not a valid email address");
}
echo "<br>";


//Validate an IP Address
$ip = "127.0.0.1"; //consider this as x.x.x.x where each x values ranges from 0 to 255
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) 
{
  echo("$ip is a valid IP address");
} 
else 
{
  echo("$ip is not a valid IP address");
}

?>