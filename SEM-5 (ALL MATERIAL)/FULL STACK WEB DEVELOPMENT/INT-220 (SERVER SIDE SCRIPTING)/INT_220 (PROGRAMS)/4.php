<?php
$n=4;
try
{
    if($n<=0)
    {
        throw new Exeption("Enter the valid number");
    }
    $div=2/$n;
    echo $div;
}
catch (Exception $e)
{
    echo $e->getMessage();
}
?>