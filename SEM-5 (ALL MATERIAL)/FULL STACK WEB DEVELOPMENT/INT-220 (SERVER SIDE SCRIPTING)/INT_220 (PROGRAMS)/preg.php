<?php
//preg_match
$myurl = "www.lpude.in";
if (preg_match("/lpu/", $myurl))
{
	echo "the url $myurl contains lpu";
}
else
{
	echo "the url $myurl does not contain lpu";
}
?>

<br>

<?php
//preg_match
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match($pattern, $text);
echo $matches . " matches were found.";
if(preg_match($pattern, $text)){
    echo "Match found!";
} else{
    echo "Match not found.";
}
?>

<br>

<?php
//preg_match_all
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
$matches = preg_match_all($pattern, $text);
echo $matches . " matches were found.";
?>

<br>

<?php
//preg_replace
$pattern = "/\s/";
$replacement = "-";
$text = "Earth revolves around\nthe\tSun";
// Replace spaces, newlines and tabs
echo preg_replace($pattern, $replacement, $text);
echo "<br>";
// Replace only spaces
echo str_replace(" ", "-", $text);
?>

<br>

<?php
$text = "Transforming education Transforming India";
$text = preg_replace("/Transforming/", '<span style="background:yellow">Transforming</span>', $text);
echo $text;
?>

<br>

<?php
//preg_split
$my_text="I Love Regular Expressions";
$my_array  = preg_split("/\s/", $my_text);
print_r($my_array );
?>

<br>

<?php
//preg_split
$pattern = "/[\s,]+/";
$text = "My favourite colors are red, green and blue";
$parts = preg_split($pattern, $text);
// Loop through parts array and display substrings
foreach($parts as $part){
    echo $part . "<br>";
}
?>

<br>

<?php
//preg_grep
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);
// Loop through matches array and display matched names
foreach($matches as $match){
    echo $match . "<br>";
}
?>

<br>

<?php
//preg_match_all
$pattern = "/color/i";
$text = "Color red is more visible than color blue in daylight.";
$matches = preg_match_all($pattern, $text);
echo $matches . " matches were found.";
?>

<br>

<?php
//preg_match_all
$pattern = "/^color/im";
$text = "Color red is more visible than \ncolor blue in daylight.";
$matches = preg_match_all($pattern, $text);
echo $matches . " matches were found.";
?>