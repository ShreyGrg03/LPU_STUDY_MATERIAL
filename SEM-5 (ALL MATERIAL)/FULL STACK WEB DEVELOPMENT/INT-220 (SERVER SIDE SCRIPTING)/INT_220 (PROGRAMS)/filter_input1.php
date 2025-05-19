<form action="" method="GET">
Age : <input type="text" name="a">
<input type="submit">
</form>
<?php
if(isset($_GET['a']))
{
if(filter_input(INPUT_GET,"a",FILTER_VALIDATE_INT)>18 && filter_input(INPUT_GET,"a",FILTER_VALIDATE_INT)<60)
{
echo "age is valid";
}
else{
echo "age is not valid";
}
}