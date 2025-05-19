<?php
$int = 230; //variable to check 
$min = 1; //min value
$max = 200; //max value


//Validate an Integer Within a Range
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) 
{
  echo("Variable value is not within the legal range");
} 
else 
{
  echo("Variable value is within the legal range");
}
echo "<br>";


//Validate URL - Must Contain QueryString
$url = "https://www.w3schools.com?a=b";
if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) 
{
  echo("$url is a valid URL with a query string");
} 
else 
{
  echo("$url is not a valid URL with a query string");
}
echo "<br>";
?>